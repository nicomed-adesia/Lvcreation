<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Produit,categorie,slider,Commande,membre, service, team};
use Illuminate\Support\Facades\Session;
use App\panier;
use App\Mail\envoieMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\redirect;
use Stripe\Charge;
use Stripe\Stripe;





class panierController extends Controller
{

    // public function affichagedashbords(){
    //     $nbrTeam = team::count();
    //     $nbrBlog= blog::count();
    //     $nbrCommande= commandeBlog::count();

    //     $service = service::OrderBy('id','Desc')->simplePaginate(5);
    //     $serviceCa = serviceCategorie::OrderBy('id','Desc')->simplePaginate(5);

    //     return view('clients.page.bienvenu', compact('nbrTeam', 'nbrBlog', 'nbrCommande', 'service','serviceCa'));
    // }

    public function ajouterPanier($id){
        $team=team::all();
        $service = service::OrderBy('id','Desc')->simplePaginate(2);
        $produits = service::find($id);
        $oldCart = Session::has('panier')? Session::get('panier'):null;
        $panier = new panier($oldCart);
        $panier->add($produits, $id);
        Session::put('panier', $panier);
        // dd(Session::get('panier'));
       return view('clients.page.bienvenu', compact('team', 'service'));
    //  return back()->with('statue', 'tsy manana compte ianao');
    }

    public function panier(){
        if(!Session::has('panier')){
            return view('clients.page.produit');
        }
        $oldPanier = Session::has('panier')? Session::get('panier'):null;
        $panier = new Panier($oldPanier);
        // dd($panier);
        $service = service::OrderBy('id','Desc')->simplePaginate(2);
        return view('clients.page.produit', ['products' => $panier->items], compact('service')); 
    }
    public function retirer_produit($id){
        $oldCart = Session::has('panier')? Session::get('panier'):null;
        $panier = new panier($oldCart);
        $panier->removeItem($id);
       
        if(count($panier->items) > 0){
            session::put('panier', $panier);
        }
        else{
            Session::forget('panier');
        }
        //dd(Session::get('cart'));
        return redirect::to('/panier'); 
    }     
    public function modifier_panier(Request $req,$id){
        $oldCart = Session::has('panier')? Session::get('panier'):null;
        $panier = new panier($oldCart);
        $panier->updateQty($id, $req->quantity);
        Session::put('panier', $panier);

        // dd(Session::get('panier'));
        return redirect::to('/panier');
    }
    public function paiement(){
        
        if(!Session::has('client')){
        
            return  view('membre.connect');
        }
        if(!Session::has('panier')){
            $commande = commande::all();
            return view('clients.page.produit');
        }
        //  dd(Session::get('panier'));
        if(!Session::has('panier')){
            return view('clients.page.produit');
        }
        $oldPanier = Session::has('panier')? Session::get('panier'):null;
        $panier = new Panier($oldPanier);
        // dd($panier);
        $service = service::OrderBy('id','Desc')->simplePaginate(2);
        return view('clients.page.checkout', ['products' => $panier->items], compact('service')); 
       
    }


    public function connecte(Request $req){
        $this->validate($req, [
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);
        $client = membre::where('email', $req->input('email'))->first();

        if($client){
            if(Hash::check($req->input('password'), $client->password)){
                Session::put('client', $client);
                return redirect('panier');
            }else{
                return back()->with('statue', 'tsy mety ny mot de pass na ny e-mail nao');
            }
        }else{
            return back()->with('statue', 'tsy manana compte ianao');
        }
    }


    public function payer(Request $req)
    {
        if(!Session::has('panier')){
            return view('admin.pages.affichage.panier');
        }
        $oldPanier = Session::has('panier')? Session::get('panier'):null;
        $panier = new panier($oldPanier);
        Stripe::setApiKey('sk_test_51O8dlqEsVbso3S5enCAaAhTymOlPnACjy6Xc59g9Rb4a5JhFdZ7nlKdFdzSeGr3MXS2FGwLaFyw8J5BeyMTCWUnC00ymOB7IHy'); // eto no asina clé privé
        try{
            $charge = Charge::create(array(
                "amount" => $panier->totalPrice*100,
                "currency"=> "usd",
                "source"=> $req->input('stripeToken'),
                "description"=>"Test Charge"
            ));
            //ampidirina ao anaty bd ze commande vita
            $commande = new Commande();
            $commande->nomClient = $req->input('name');
            $commande->adressClient = $req->input('adresse');
            $commande->panier = serialize($panier); // serileze make ny element rehetra ao anaty base
            $commande->jeton=$charge->id;
            $commande->save();

            $commande = commande:: where('jeton', $charge->ig)->get();
            $commande->transform (function($hafatra, $key){
                $hafatra->panier = unserialize($hafatra ->panier);
                return $hafatra;
            });
            
                $mailaka = Session::get('membre')->email;
                Mail::to($mailaka)->send(new envoieMail($commande));
        }
        catch(\Exception $e){
            // Session::put('error', $e->getMessage());
            return redirect('/paiement')->with('erreur',$e->getMessage());      
     
        }
        // mamafa ny panier rehetra ny atao , atao mise a zero
        session::forget('panier');
        // session::put('success', 'Paiement effactué !');
        return redirect('panier')->with('tafiditra', 'Achat effectué avec success!');

    }
    
    public function commande(){
        $commandes = commande::get();
        $pagina = commande::orderBy('id', 'DESC')->simplePaginate(3);
        Session::put('commandes', $commandes);
        $commandes->transform (function($hafatra,$keys){
            $hafatra->panier= unserialize($hafatra->panier);
            return $hafatra;

        });
        return view('admin.pages.affichage.Commande', compact('pagina'))->with('commandes', $commandes, 'i')->with('i', (request()->input('page', 1)-1) *5);
    }
}



