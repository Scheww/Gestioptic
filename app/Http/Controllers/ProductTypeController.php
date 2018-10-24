<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:07 p.m.
 */

namespace App\Http\Controllers;


use App\ProductType;
use App\ProductTypeType;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProductTypeTypeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type= ProductTypeType::where('optic_id', $request->input('optic_id'))->get();

        return view('index', $type);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product_type = new ProductType();
        $product_type->fill($request->all());
        try {
            $product_type->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('product_type.index',  $product_type);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product_type = ProductType::find($id);
        if (!$product_type) {
            return 'no existe product_typeo';
        }
        $product_type->fill($request->all());

        try {
            $product_type->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('product_type.index',  $product_type);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $product_type = ProductType::find($id);
        if (!$product_type) {
            return 'no existe product_typeo';
        }

        try {
            $product_type->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return view('product_type.index',  $product_type);
    }
}