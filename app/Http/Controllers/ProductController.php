<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function menu_plusieurs()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',1);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'MENUS À PLUSIEURS']);
    }
    public function mixte()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',2);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'MENU - MIXTE']);
    }
    public function maki()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',3);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'MAKI']);
    }
    public function sashimi()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',4);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'sashimi']);
    }
    public function chirashi()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',5);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'chirashi']);
    }
    public function temaki()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',6);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Temaki']);
    }

    public function sushi()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',7);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'SUSHI']);
    }



public function bento()
{
    $produit=\App\Produit::all()->where('categorie_id','=',9);
    //dd($produit);
    return view('acheter',['data'=>$produit,'title'=>'Bento']);
}
public function udon()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',10);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'UDON']);
    }
    public function gyoza()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',11);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Gyoza']);
    }

    public function tempura()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',12);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Tempura']);
    }
    public function sushi1()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',7);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'SUSHI']);
    }

    public function accompagnement()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',13);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Accompagnement']);
    }
    public function salades()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',14);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Salades']);
    }

    public function tartares()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',15);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Tartares']);
    }
    public function dessert()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',26);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Dessert']);
    }

    public function boisson()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',27);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Boissons']);
    }


    public function carte_classique_sushi()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',16);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Sushi']);
    }

    public function carte_classique_maki()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',17);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Maki']);
    }
    public function carte_classique_brochette()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',18);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Brochettes']);
    }
    public function carte_classique_temaki()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',19);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Temaki']);
    }

    
    public function carte_creatif_rockets()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',20);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>"Rocket's"]);
    }
    public function carte_creatif_trendys()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',21);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>"Trendy's"]);
    }
    public function carte_creatif_caliwasabis()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',23);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>"CALIWASABI'S"]);
    }
    public function carte_creatif_craps()
    {
        $produit=\App\Produit::all()->where('categorie_id','=',22);
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>"Crap's"]);
    }







    public function all()
    {
        $produit=\App\Produit::all();
        //dd($produit);
        return view('acheter',['data'=>$produit,'title'=>'Nos produits']);
    }

    public function add_contact(Request $request)
    {
        $contact=new \App\Contact();
        $contact->nom=$request->nom;
        $contact->telephone=$request->telephone;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        //dd($produit);
        return redirect()->route('contact')->with('message','Message Envoyé');
    }



    public function acheter($id)
    {
        //dd($id);
        $product=\App\Produit::find($id);

        return view('product',['data'=>$product]);
    }


    public function contact()
    {
        return view('contact');
    }








}

