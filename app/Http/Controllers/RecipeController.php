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
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

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
            try {
            $recipe = Recipe::with('client')
                ->whereHas('client', function ($q) use ($optic_id, $request) {
                    $q->where('clients.optic_id', $optic_id)
                        ->where('clients.name', 'like', '%'.$request->input('s').'%');
            })
            ->get();
            } catch (QueryException $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
                $recipe = '';
            } catch (\PDOException $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
                $recipe = '';
            }

        }else{
            try {
            $recipe = Recipe::with('client')
                ->whereHas('client', function ($q) use ($request) {
                    $q->where('clients.name', 'like', '%'.$request->input('s').'%');
                })
                    ->where('observations', 'like', '%'.$request->input('s').'%')
                ->all();
            } catch (QueryException $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
                $recipe = '';
            } catch (\PDOException $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
                $recipe = '';
            }
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
        return view('recipes.form', ['recipe' => $recipe]);
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

        return redirect(route('recipe-index'));
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

        return redirect(route('recipe-index'));
    }
}