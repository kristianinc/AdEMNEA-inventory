<?php

namespace App\Http\Controllers;
use App\Models\item;
use App\Models\trackableitems;
use App\Models\category;
use App\Models\compartments;
use App\Models\users;
use App\Models\borrow;
use App\Models\consignments;
use Illuminate\Http\Request;

class fetch_stuff extends Controller
{


  //fetching consignments from the db
   
  public function fetch_consignments(){

    $consignments = consignments::all();

   return view('/consignments',compact('consignments'));


   }

  //fetching compartments from the db
   
  public function fetch_compartments(){

    $compartments = compartments::all();

 return view('/compartments',compact('compartments'));


   }


    //this function fetches categories to the categories page
    public function fetch_things(){

        $categories = category::all();
   
     return view('/category',compact('categories'));
   
   
       }



     // this functions sends categories and items to the items page.
       public function fetch_cat_item(){
        
        $categories = category::all();
        $trackableitems = trackableitems::all();
        $generalitems= item::all();


        return view('/items',compact('categories','generalitems','trackableitems'));
   
   
       }

 //function fetches categories for the select dropdown in items page for the register_item page.
       public function fetch_cat_for_item(){
        
        $categories = category::all();
        $compartments = compartments::all();
        $consignments = consignments::all();
        return view('/register_item',compact('categories','consignments','compartments'));
   
       }



       //function fetches users to their page
       public function fetch_users(){
        
        $users = users::all();
        return view('/users',compact('users'));
   
   
       }

       //function fetches items to the borrow page.
       public function fetch_borrow_items(){ 

        $categories = category::all();
        $trackableitems = trackableitems::all();
        $generalitems= item::all();


        return view('/borrows',compact('categories','generalitems','trackableitems'));
   
       }

}


