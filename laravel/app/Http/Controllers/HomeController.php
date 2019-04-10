<?php

namespace App\Http\Controllers;
use App\Model\Car;
use App\Model\Categorie;

use App\Model\Panier;
use App\Model\Produit;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User();
        $all_users = $users::all();

        return view('catalogue')->withUsers($all_users);
    }
}
