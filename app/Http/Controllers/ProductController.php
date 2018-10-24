<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:07 p.m.
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with('brand','productType')
            ->whereHas('brand', function ($q) use($request){
                $q->where('optic_id', $request->user->id);
        })->get();

        return view('products.index', ['products' => $products ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, $query)
    {
        $products = Product::with('brand','productType')
            ->where('stock','>', 0)
            ->whereHas('brand', function ($q) use($request) {
                $q->where('optic_id', $request->user->id);
            })
            ->where('name', 'like', '%'.$query.'%')->get();

        return $products;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getById(Request $request, $id)
    {
        $product = Product::with('brand','productType')->find($id);

        return $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = ProductType::where('optic_id', $request->user->optic_id)->get();
        $brand = Brand::where('optic_id', $request->user->optic_id)->get();
        return view('products.form', [
            'types' => $type,
            'brands' => $brand
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        try {
            $product->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('product-index'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = ProductType::where('optic_id', $request->user->optic_id)->get();
        $brand = Brand::where('optic_id', $request->user->optic_id)->get();

        $product = Product::with('brand','productType')->find($id);
        if (!$product) {
            return view('products.index');
        }

        return view('products.form', [
            'product' => $product,
            'types' => $type,
            'brands' => $brand
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return 'no existe producto';
        }
        $product->fill($request->all());

        try {
            $product->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('products.index',  $product);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return 'no existe producto';
        }

        try {
            $product->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return view('products.index',  $product);
    }
}