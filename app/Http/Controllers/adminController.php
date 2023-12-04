<?php

namespace App\Http\Controllers;


use App\Models\{commandeBlog,team,blog,service,serviceCategorie};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    public function indexLvcreaction()
    {
        $nbrTeam = team::count();
        $nbrBlog= blog::count();
        $nbrCommande= commandeBlog::count();

        $service = service::OrderBy('id','Desc')->simplePaginate(5);
        $serviceCa = serviceCategorie::OrderBy('id','Desc')->simplePaginate(5);

        return view('admin.indexLvcreaction', compact('nbrTeam', 'nbrBlog', 'nbrCommande', 'service', 'serviceCa'));
    }
    
    public function ajoutTeam()
    {
        return view('admin.pages.ajout.ajoutTeam');
    }

    public function addTeam(Request $request)
    {
        $this->validate($request,[
            'NomPrenom'=>'required|unique:teams',
            'fonction'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'image'=>'file|required'
        ]);
        $anaranaAvecExtension = $request->file('image')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('image')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('image')->storeAs('public/team/my_images', $anaranaFichier);

        $team = new team();
        $team->NomPrenom = $request->input('NomPrenom');
        $team->fonction = $request->input('fonction');
        $team->contact = $request->input('contact');
        $team->email = $request->input('email');
        $team->facebook = $request->input('facebook');
        $team->image = $request->input('image');
        $team->image = $anaranaFichier;
        $team->save();
        return redirect('indexLvcreaction')->with('tafiditra',"ajout team reussi");
    }

    public function afficherTeam()
    {
        $team = team::orderBy('id', 'desc')->simplePaginate(6);
        return view('admin.pages.affichage.afficherTeam', compact('team'));
    }

    public function modifierTeam($id)
    {
        $team= team::find($id);
        return view('admin.pages.actions.modifierTeam', compact('team'));
    }
    public function updateTeam(Request $req)
    {
        $this->validate($req,[
            'NomPrenom'=>'required',
            'fonction'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'image'=>'image|nullable'
        ]);
        if($req->hasfile('image')){
            storage::delete('public/my_images/'.$req->input('imageTaloha'));
            $team = team::find($req->input('id'));
            $team->NomPrenom = $req->input('NomPrenom');
            $team->fonction = $req->input('fonction');
            $team->contact = $req->input('contact');
            $team->email = $req->input('email');
            $team->facebook = $req->input('facebook');

            $anaranaAvecExtension = $req->file('image')->getClientOriginalName();   
            $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
            $anaranaExtension = $req->file('image')->getClientOriginalExtension();  
            $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
            $image = $req->file('image')->storeAs('public/my_images', $anaranaFichier);

            $team->image = $anaranaFichier;
            $team->update();
            session::put('modifier', 'modifier ilay team '.$team->NomPrenom);
        }
        // else{
        //     $team = team::find($req->input('id'));
        //     $team->NomPrenom = $req->input('NomPrenom');
        //     $team->fonction = $req->input('fonction');
        //     $team->contact = $req->input('contact');
        //     $team->email = $req->input('email');
        //     $team->facebook = $req->input('facebook');
        //     $team->image = $req->input('image');
        //     $team->update();
        // }
        return redirect()->route('afficherTeam');
    }

    public function supprimerTeam($id)
    {
        $team = team::find($id);
        $team->delete();
        session::put('supprimer', 'supprimer ilay team '.$team->NomPrenom);
        return redirect()->route('afficherTeam');
    }
}
