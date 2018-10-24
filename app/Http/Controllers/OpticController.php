<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:07 p.m.
 */

namespace App\Http\Controllers;


use App\Optic;
use Illuminate\Http\Request;
use Mockery\Exception;

class OpticController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $optics = Optic::all();

        return view('optic.index',
                                ['optics' => $optics]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('optic.form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $optic = new Optic();
        $optic->fill($request->all());
        try {
            $optic->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('optic-index'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $optic = Optic::find($id);
        if (!$optic) {
            return view('optic.index');
        }
        return view('optic.form', ['optic' => $optic]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $optic = Optic::find($id);
        if (!$optic) {
            return 'no existe optico';
        }
        $optic->fill($request->all());

        try {
            $optic->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('optic-index'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $optic = Optic::find($id);
        if (!$optic) {
            return 'no existe optico';
        }

        try {
            $optic->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('optic-index'));
    }
}