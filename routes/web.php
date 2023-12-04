<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{adminController,serviceController, blogController, connexionController,teamController, dashbordController, panierController, pdfController, accueilController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('bienvenu');
// });

// route team
Route::get('indexLvcreaction', [adminController::class, 'indexLvcreaction'])->name('indexLvcreaction');
Route::get('ajoutTeam', [teamController::class, 'ajoutTeam'])->name('ajoutTeam');
Route::post('addTeam', [teamController::class, 'addTeam'])->name('addTeam');
Route::get('afficherTeam', [teamController::class, 'afficherTeam'])->name('afficherTeam');
Route::get('modifierTeam/{id}', [teamController::class, 'modifierTeam'])->name('modifierTeam');
Route::post('updateTeam', [teamController::class, 'updateTeam'])->name('updateTeam');
Route::get('supprimerTeam/{id}', [teamController::class, 'supprimerTeam'])->name('supprimerTeam');

// fonction
Route::get('ajoutFonction', [teamController::class, 'ajoutFonction'])->name('ajoutFonction');
Route::post('addFonction', [teamController::class, 'addFonction'])->name('addFonction');
Route::get('afficherFonction', [teamController::class, 'afficherFonction'])->name('afficherFonction');
Route::get('modifierFonction/{id}', [teamController::class, 'modifierFonction'])->name('modifierFonction');
Route::post('updateFonction', [teamController::class, 'updateFonction'])->name('updateFonction');
Route::get('supprimerFonction/{id}', [teamController::class, 'supprimerFonction'])->name('supprimerFonction');

// service
Route::post('AjCategorieService', [serviceController::class, 'AjCategorieService'])->name('AjCategorieService');
Route::get('CategorieService', [serviceController::class, 'CategorieService'])->name('CategorieService');
Route::get('affcatService', [serviceController::class, 'affcatService'])->name('affcatService');

Route::post('AjService', [serviceController::class, 'AjService'])->name('AjService');
Route::get('Service', [serviceController::class, 'Service'])->name('Service');
Route::get('affService', [serviceController::class, 'affService'])->name('affService');


// blog
Route::get('CategorieBlog', [blogController::class, 'CategorieBlog'])->name('CategorieBlog');
Route::post('AjCategorieBlog', [blogController::class, 'AjCategorieBlog'])->name('AjCategorieBlog');

Route::get('Blog', [blogController::class, 'Blog'])->name('Blog');
Route::post('AjBlog', [blogController::class, 'AjBlog'])->name('AjBlog');



Route::get('ajouterPanier/{id}',[panierController::class,'ajouterPanier'])->name('ajouterPanier');
Route::get('panier', [panierController::class,'panier'])->name('panier');
Route::get('retirer_produit/{id}', [panierController::class,'retirer_produit'])->name('retirer_produit');
Route::post('modifier_qty/{id}', [panierController::class,'modifier_panier'])->name('modifier_panier');
Route::get('paiement', [panierController::class,'paiement'])->name('paiement');
Route::post('connecte', [panierController::class,'connecte'])->name('connecte');
Route::post('payer',[panierController::class,'payer'])->name('payer');
Route::get('Commande', [panierController::class,'Commande'])->name('Commande');

// pdfcontroller
Route::get('voirPdf/{id}', [pdfController::class,'voirPdf'])->name('voirPdf');

// Route::post('payer',[panierController::class,'payer'])->name('payer');
// mail
Route::post('mail', [mailController::class, 'mail'])->name('mail');
Route::get('email',[mailController::class,'email'])->name('email');


// connexion utilisateur
Route::post('Econnexion', [connexionController::class, 'Econnexion'])->name('Econnexion');
Route::get('connexion',[connexionController::class,'connexion'])->name('connexion');

Route::post('inscriptionE', [connexionController::class, 'inscriptionE'])->name('inscriptionE');
Route::get('inscrire',[connexionController::class,'inscrire'])->name('inscrire');

Route::get('deconnexion', [connexionController::class,  'deconnexion'])->name('deconnexion');
Route::get('mdpOublie', [connexionController::class,  'mdpOublie'])->name('mdpOublie');
Route::post('motdepasseOublie', [connexionController::class,  'motdepasseOublie'])->name('motdepasseOublie');


Route::get('AjoutPersonnel', [dashbordController::class,'AjoutPersonnel'])->name('AjPersonnel');
Route::get('choix_service/{name}',[dashbordController::class,'choix_service'])->name('choix_service');


// dashbord

Route::get('affichagedashbord', [dashbordController::class,'affichagedashbord'])->name('affichagedashbord');


// route client
Route::get('/', [accueilController::class,'bienvenu'])->name('bienvenu');
Route::get('products', [accueilController::class,'products'])->name('products');
Route::get('checkout', [accueilController::class,'checkout'])->name('checkout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
