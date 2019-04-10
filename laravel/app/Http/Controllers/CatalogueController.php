<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use App\User;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
   public function catalogue(Request $request)
   {
       $users = new User();
       $all_users = $users::all();

    return view('catalogue')->withUsers($all_users);
   }
}
