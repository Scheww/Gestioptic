<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 20/10/2018
 * Time: 10:06
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {
        return view('user-form');
    }

}