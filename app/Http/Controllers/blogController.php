<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{categorieblog, blog};
use Illuminate\Support\Facades\Session;


class blogController extends Controller
{
    public function CategorieBlog(){
        return view('admin.pages.ajout.AjCategorieBlog');
    }

    public function AjCategorieBlog(Request $req){

        $this->validate($req,['categorieblog'=>'required|unique:categorieblogs']);

        $categorie = New categorieblog();
        $categorie ->categorieblog = $req -> input('categorieblog');

        $categorie -> save ();

        Session::put('acategorieblog', 'tafiditra tsara ilay produit ' .$categorie->nomblog . '  izay nampidirinao');
        return redirect()->route('CategorieBlog');
    } 


    public function Blog(){
        $categorie = categorieblog::all();  // mampiseo le categorie eo amle <option>
        return view('admin.pages.ajout.AjoutBlog', compact('categorie'));
    }

    public function ajblog(Request $request){
        $this->validate($request,[
            'nomBlog'=>'required|unique:blogs',
            'prixBlog' => 'required',
            'descriptionBlog' => 'required',
            'categorieblog' => 'required',
            'imageBlog' => 'required',
            'statueBlog' => 'required',
        ]);

        $Blog = new blog();
        $Blog->nomBlog = $request->input('nomBlog');
        $Blog->prixBlog = $request->input('prixBlog');
        $Blog->descriptionBlog = $request->input('descriptionBlog');

        $Blog->categorieblog = $request->input('categorieblog');
        $Blog->imageBlog = $request->input('imageBlog');
        $Blog->statueBlog = $request->input('statueBlog');

        $anaranaAvecExtension = $request->file('imageBlog')->getClientOriginalName();
        $anaranaFotsiny = pathinfo($anaranaAvecExtension,PATHINFO_FILENAME);
        $anaranaExtension = $request->file('imageBlog')->getClientOriginalExtension();
        $anaranaFichier = $anaranaFotsiny.'_'.time().'.'.$anaranaExtension;
        $image = $request->file('imageBlog')->storeAs('public/Blog/my_images', $anaranaFichier);
        // var_dump('Blog');

        $Blog->imageBlog=$anaranaFichier;
        $Blog->save();

        Session::put('tafaBlog', 'tafiditra tsara ilay produit ' .$Blog->nomBlog . '  izay nampidirinao');
        return redirect()->route('Blog');

    }
}
