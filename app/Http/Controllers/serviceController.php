<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{serviceCategorie,Service};

class serviceController extends Controller
{

        public function indexLvcreaction()
    {
        $nbrTeam = team::count();
        $nbrBlog= blog::count();
        $nbrCommande= commandeBlog::count();

        $service = service::OrderBy('id','Desc')->simplePaginate(5);

        return view('admin.indexLvcreaction', compact('nbrTeam', 'nbrBlog', 'nbrCommande', 'service'));
    }
    public function CategorieService(){
        return view('admin.pages.ajout.AjCategorieService');
    }
    public function AjCategorieService(Request $request){
        $this->validate($request,[
            'service'=>'required|unique:service_categories',
        ]);
      
        $team = new serviceCategorie();
        $team->service = $request->input('service');
       
        $team->save();
        return redirect('affcatService')->with('tafiditra',"ajout service reussi");
    }

    public function affcatService(){
        $serviceCate = serviceCategorie::All();

        return view('admin.pages.affichage.afficherCategoService', compact('serviceCate'));
    }




    public function Service(){
        $categorieService= serviceCategorie::OrderBy('id','Desc')->simplePaginate(5);
        return view('admin.pages.ajout.AjService', compact('categorieService'));
    }
    public function AjService(Request $request){
        $this->validate($request,[
            'nomService'=>'required|unique:services',
            'serviceCategorie'=>'required',
            'AvantageOffre'=>'required',
            'statueService'=>'required',
            'tarifService'=>'required',
            'description'=>'required',        
            'imageService'=>'file|required'
        ]);
        $anaranaAvecExtension = $request->file('imageService')->getClientOriginalName();   
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME); 
        $anaranaExtension = $request->file('imageService')->getClientOriginalExtension();  
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;             
        $image = $request->file('imageService')->storeAs('public/service/my_images', $anaranaFichier);

        $team = new Service();
        $team->NomService = $request->input('nomService');
        $team->serviceCategorie = $request->input('serviceCategorie');
        $team->statueService = $request->input('statueService');
        $team->tarifService = $request->input('tarifService');
        $team->AvantageOffre = $request->input('AvantageOffre');
        $team->description = $request->input('description');
      
        $team->imageService = $request->input('imageService');
        $team->imageService = $anaranaFichier;
        $team->save();
        return redirect('affService')->with('tafiditrasrev',"ajout service reussi");
    }
    public function affService(){
        $serviceCate = service::All();
        return view('admin.pages.affichage.afficherService', compact('serviceCate'));
    }
}
