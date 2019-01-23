<?php
/**
 * Created by PhpStorm.
 * User: Luke
 * Date: 1/10/2018
 * Time: 19:57
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Optic;
use App\ProductType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConfigurationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function opticIndex(Request $request)
    {
        $optic = Optic::find($request->user->optic_id);

        return view('configuration._optic-index', ['optic' => $optic]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function opticUpdate(Request $request, $id)
    {
        $optic = Optic::find($id);
        if (!$optic) {
            return 'no existe optica';
        }
        $optic->fill($request->all());

        try {
            $optic->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('configuration._optic-index', ['optic' => $optic]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandIndex(Request $request)
    {
        $brands = Brand::where('optic_id', $request->user->optic_id)
            ->where('name', 'like', '%'.$request->input('s').'%')
            ->get();

        return view('configuration._brand-index', ['brands' => $brands]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandCreate(Request $request)
    {
        return view('configuration._brand-form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandStore(Request $request)
    {
        $brand = new Brand();
        $brand->fill($request->all());
        $brand->optic_id = $request->user->optic_id;

        try {
            $brand->save();
        }catch (Exception $e) {
            return 'error';
        }
        return redirect(route('config-brands'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandUpdate(Request $request, $id)
    {
        $brand = Brand::find($id);
        return view('configuration._brand-form', [ 'brand' => $brand]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandDelete(Request $request, $id)
    {
        Brand::destroy($id);
        return redirect(route('config-brands'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandEdit(Request $request, $id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return 'no existe marca';
        }
        $brand->fill($request->all());

        try {
            $brand->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('config-brands'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeIndex(Request $request)
    {
        $types = ProductType::where('optic_id', $request->user->optic_id)
            ->where('name', 'like', '%'.$request->input('s').'%')
            ->get();

        return view('configuration._type-index', ['types' => $types]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeCreate(Request $request)
    {
        return view('configuration._type-form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeStore(Request $request)
    {
        $type = new ProductType();
        $type->fill($request->all());
        $type->optic_id = $request->user->optic_id;

        try {
            $type->save();
        }catch (Exception $e) {
            return 'error';
        }
        return redirect(route('config-types'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeUpdate(Request $request, $id)
    {
        $type = ProductType::find($id);
        return view('configuration._type-form', [ 'type' => $type]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeDelete(Request $request, $id)
    {
        ProductType::destroy($id);
        return redirect(route('config-types'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeEdit(Request $request, $id)
    {
        $type = ProductType::find($id);
        if (!$type) {
            return 'no existe marca';
        }
        $type->fill($request->all());

        try {
            $type->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('config-types'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex(Request $request)
    {
        $user_configs = User::where('optic_id', $request->user->optic_id)
            ->where('name', 'like', '%'.$request->input('s').'%')
            ->get();

        return view('configuration._user-index', ['users_config' => $user_configs]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userCreate(Request $request)
    {
        return view('configuration._user-form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userStore(Request $request)
    {
        $user_config = new User();
        $user_config->fill($request->all());
        $user_config->optic_id = $request->user->optic_id;
        $user_config->password = Hash::make($request->input('password'));

        try {
            $user_config->save();
        }catch (Exception $e) {
            return 'error';
        }
        return redirect(route('config-users'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(Request $request, $id)
    {
        $user_config = User::find($id);

        return view('configuration._user-form', [ 'user_config' => $user_config]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userDelete(Request $request, $id)
    {
        User::destroy($id);
        return redirect(route('config-users'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userEdit(Request $request, $id)
    {
        $user_config = User::find($id);
        if (!$user_config) {
            return 'no existe marca';
        }
        $user_config->fill($request->all());

        try {
            $user_config->save();
        }catch (Exception $e) {
            return 'error';
        }

        return redirect(route('config-users'));
    }
}