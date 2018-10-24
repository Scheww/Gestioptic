<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:08 p.m.
 */

namespace App\Http\Controllers;


use App\Client;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->user->optic_id)) {
            $optic_id = $request->user->optic_id;
            $recipe = Recipe::with('client')->whereHas('client', function ($q) use ($optic_id) {
                $q->where('clients.optic_id', $optic_id);
            })->get();
        }else{
            $recipe = Recipe::with('client')->all();
        }

        return view('recipes.index', ['recipes' => $recipe]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('recipes.form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::where('email', $request->input('email'))->first();

        if (!$client) {
            $client = new Client();
        }
        $client->fill($request->all());
        $client->optic_id = $request->user->optic_id;
        $client->save();

        $recipe = new Recipe();
        $recipe->fill($request->all());
        $recipe->client_id = $client->id;
        $recipe->user_id = $request->user->id;

        $recipe->save();

        return redirect(route('recipe-index'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return view('recipe.index');
        }
        return view('recipe.form', ['recipe' => $recipe]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return 'no existe recipeo';
        }
        $recipe->fill($request->all());

        try {
            $recipe->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('recipe.index',  $recipe);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return 'no existe recipeo';
        }

        try {
            $recipe->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return view('recipe.index',  $recipe);
    }
}