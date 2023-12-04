<?php

namespace App\Http\Controllers;

use App\Models\fonctionTeam;
use Illuminate\Http\Request;
use App\Models\team;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class teamController extends Controller
{
    public function ajoutTeam()
    {
        $fonction = fonctionTeam::all();
        return view('admin.pages.ajout.ajoutTeam', compact('fonction'));
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
        return redirect('afficherTeam')->with('tafiditra',"ajout team reussi");
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

    public function ajoutFonction()
    {
        return view('admin.pages.ajout.ajoutFonction');
    }

    public function addFonction(Request $request)
    {
        $this->validate($request, ['nomFonction'=>'required|unique:fonction_teams']);
        $fonction = new fonctionTeam();
        $fonction->nomFonction = $request->input('nomFonction');
        $fonction->save();
        return redirect('ajoutFonction')->with('ajoutFonction', 'ajout fonction reussi');
    }

    public function afficherFonction()
    {
        $fonction = fonctionTeam::orderBy('id', 'desc')->simplePaginate(6);
        return view('admin.pages.affichage.afficherFonction', compact('fonction'));
    }

    public function modifierFonction($id)
    {
        $fon = fonctionTeam::find($id);
        return view('admin.pages.actions.modifierFonction', compact('fon'));
    }

    public function updateFonction(Request $req)
    {
        $this->validate($req,[
            'nomFonction'=>'required'
        ]);
        $fonction = fonctionTeam::find($req->input('id'));
        $fonction->nomFonction = $req->input('nomFonction');
        $fonction->update();
        session::put('modifierFonctioin', 'modifier ilay fonction '.$fonction->nomFonciton);
        return redirect()->route('afficherFonction');
    }

    public function supprimerFonction($id)
    {
        $fonction = fonctionTeam::find($id);
        $fonction->delete();
        session::put('supprimerFonction', 'supprimer ilay fonction '.$fonction->nomFonction);
        return redirect()->route('afficherFonction');
    }
}
