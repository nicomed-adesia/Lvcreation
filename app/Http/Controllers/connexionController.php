<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{membre,User, team, service};
use Illuminate\Support\Facades\Session;
use Illuminate\support\Facades\Hash;
class connexionController extends Controller
{
    // Econnexion
    // connexion
    // inscriptionE
    // inscrire
    
    public function inscrire(){        
        return view('membre.inscription');
    }

    public function inscriptionE(Request $request) // ref post de misy request
    {
        $this->validate($request,[
            'nom'=>'required|unique:membres',
            'email' => 'required',
            'password' => 'required|min:4',
            'imagemembre' => 'required',
        ]);

        $membre = new membre();
        $membre->nom = $request->input('nom');
        $membre->email = $request->input('email');
        $membre->password =  bcrypt($request->input('password'));
        $membre->imageMembre = $request->input('imagemembre');
        $membre->Role = 'membre';
       
        $anaranaAvecExtension = $request->file('imagemembre')->getClientOriginalName();
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME);
        $anaranaExtension = $request->file('imagemembre')->getClientOriginalExtension();
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;
        $image = $request->file('imagemembre')->storeAs('public/membre/my_images', $anaranaFichier);

        $membre->imageMembre=$anaranaFichier;
        $membre->save();

        Session::put('sms2', 'vottre inscription à étè fait(es) avec succés ' .$membre->nom);
        return redirect()->route('connexion');
    }

    public function connexion(){           

        return view('membre.connexion');
    }

    public function Econnexion(Request $req){
        $team = team::all();
        $service = service::all();
        $this->validate($req, [
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);
        
        if($admin = User::where('email', $req->input('email'))->first())
        {
            if($admin)
            {
                if(Hash::check($req->input('password'), $admin->password)){
                    Session::put('admin', $admin);
                    return view('clients.page.bienvenu');
            }else{
                    return back()->with('statue', 'tsy mety ny mot de pass na ny e-mail nao');
                }
            }else{
                return back()->with('statue', 'tsy manana compte ianao');
            }
        }elseif($membre= membre::where('email', $req->input('email'))->first()){
            Session::put('membre', $membre);

            return view('clients.page.bienvenu', compact('team', 'service'));
        }
    }
    public function deconnexion(){
        Session::forget('membre');
        return redirect('connexion');
    }
}
