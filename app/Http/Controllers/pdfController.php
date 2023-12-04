<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use Session;

class pdfController extends Controller
{
    public function voirPdf($id){
        Session::put('id',$id);
        try {
            //miantso ny librairei mba anao ny conversionito, sur formant a4 su orientation
            $pdf=\App::make('dompdf.wrapper')->setPaper('a4','landscape');
            //de eto miantso ny fichier html andefasana ny function
            $pdf->loadHTML($this->conversionTohtml());
            return $pdf->stream();
        } catch (Exception $e) {
            return redirect('/commande')->with('erreur', $e->getMessage());
        }
    }
    public function conversionTohtml(){
        //session io ambon io ito session get id ito eo am ligne 13
        $commande =commande::where('id',Session::get('id'))->get();
        foreach ($commande as $order) {
            $anarana = $order->nomClient;
            $adiresy=$order->adresseClient;
            $daty=$order->created_at;
        }
        $commande->transform(function($hafatra,$key){
            $hafatra->panier= unserialize($hafatra->panier);
            return $hafatra;
        });
        $output='<link rel="stylesheet" href="client/css/style.css">
                <table class="table">
                    <thead class="thead">
                        <tr class="text-left">
                            <th>Client Name:'.$anarana.'<br> Client Adress :'.$adiresy.'<br> Date :'.$daty.'</th>
                        </tr> 
                    </thead>
                </table>    
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                            <th>Sary</th>
                            <th>Total</th>
                            <th>Prix Produit</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr> 
                    </thead>
                    </tbody>';
         foreach ($commande as $order) {
            foreach ($order->panier->items as $item) {
                $output.='<tr class="text-center">
                <td class="image-prod"><img src="storage/service/my_images/'.$item['imageService'].'" alt="" style="height: 80px; width:80px;"/></td>
                <td class="product-name">
                <h3>'.$item['nomService'].'</h3>
                </td>
                <td class="price">$'.$item['tarifService'].'</td>istij
                <td class="qty">'.$item['qty'].' </td>
                <td class="total">$'.$item['tarifService']*$item['qty'].' </td>
                </tr> 
                </tbody>';
                
            }
            $totalPrice=$order->panier->totalPrice;
         }           
         $output.='</table>';
         $output.='<table class="table">
         <thead class="thead">
            <tr class="text-center">
                <th>Total</th>
                <th>$'.$totalPrice.'</th>
            </tr>
        </thead>
        </table>';
        return $output;                        
    }
}
