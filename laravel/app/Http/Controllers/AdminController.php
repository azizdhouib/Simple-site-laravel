<?php

namespace App\Http\Controllers;

use App\Model\Command;
use App\Model\Produit;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $produit = new Produit();
        $produit->name_produit = $request->get('name');
        $produit->quantite = $request->get('quantite');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->categorie_id = $request->get('categorie');
        $produit->image = $request->get('image');
        $produit->save();
        return redirect()->action('CatalogueController@catalogue');
    }
    public function admin(Request $request)
    {
        $user = new User();
        $users = $user::all();
        $command = new Command();
        $commands = $command::all();

        return view('admin')->withUsers($users)->withCommands($commands);
    }
    public function modifier(Request $request)
    {
        $user = User::find($request->get('id'));

        $input = $request->only('fname', 'lname', 'email');

        $user->update($input);
        return back();
    }
    public function delete(Request $request)
    {
        User::where('id', $request->get('id'))->delete();
        return back();
    }

}
