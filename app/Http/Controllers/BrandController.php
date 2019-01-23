<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:07 p.m.
 */

namespace App\Http\Controllers;


use App\Brand;
use Illuminate\Http\Request;
use Mockery\Exception;

class BrandController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brand = Brand::where('optic_id', $request->input('optic_id'))
            ->where('name', 'like', '%'.$request->input('s').'%')
            ->get();

        return view('index', $brand);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $brand = new Brand();
        $brand->fill($request->all());
        try {
            $brand->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('brand.index',  $brand);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return 'no existe brando';
        }
        $brand->fill($request->all());

        try {
            $brand->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('brand.index',  $brand);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return 'no existe brand';
        }

        try {
            $brand->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return view('brand.index',  $brand);
    }
}