<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use App\Models\{commandeBlog,team,blog,service,serviceCategorie};
use App\panier;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function affichagedashbord(){
        $nbrTeam = team::count();
        $nbrBlog= blog::count();
        $nbrCommande= commandeBlog::count();

        $service = service::OrderBy('id','Desc')->simplePaginate(5);
        $serviceCa = serviceCategorie::OrderBy('id','Desc')->simplePaginate(5);

        return view('admin.indexLvcreaction', compact('nbrTeam', 'nbrBlog', 'nbrCommande', 'service','serviceCa'));
    }

    public function choix_service($name){

        $service = service::get();
        $serviceCa = serviceCategorie::OrderBy('id','Desc')->simplePaginate(5);

        return view('admin.indexLvcreaction', compact('service', 'serviceCa'));
    } 

    public function ajopanier(){
        $panier = service::all();
      
        return view('admin.pages.affichage.panier' , compact('panier'));
     }

     public function ajPanier($id){
        $panier = service::findOrFail($id);
        $cart = Session() ->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
           
        }else{
        $cart[$id] = [
            "nomService" => $panier -> nomService,
            "quantity" => 1,
            "tarifService" => $panier -> tarifService,
            "imageService" => $panier ->imageService,
            
            
        ];
        }
        // dd($panier);
        Session() ->put('cart', $cart);
        return redirect() ->back()->with('success', 'panier ajouter');
     }

     public function supService(Request $request){
            if($request ->id){
                $cart = session()->get('cart');
                if(isset($cart[$request->id]));
                unset($cart[$request->id]);
                Session()->put('cart', $cart);
            }
            Session() ->flash('success', 'suppression effecture.');
     }
   


   
}
