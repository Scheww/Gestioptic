<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 9/5/2018
 * Time: 7:08 p.m.
 */

namespace App\Http\Controllers;


use App\Budget;
use App\Client;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mockery\Exception;

class BudgetController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $budgets = Budget::with('client', 'optic')->where('optic_id', $request->user->optic_id)->orderBy('created_at')->get();

        foreach ($budgets as $budget) {
            switch ($budget->payment_form){
                case 1:
                    $budget->payment_form = 'Ticket Fiscal';
                    break;
                case 2:
                    $budget->payment_form = 'Efectivo';
                    break;
                case 3:
                    $budget->payment_form = 'Factura A';
                    break;
                case 4:
                    $budget->payment_form = 'Factura B';
                    break;
                default :
                    $budget->payment_form = 'Ticket Fiscal';
                    break;
            }
        }

        return view('sales.index',
                    ['budgets' => $budgets]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('sales.form');
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

        $budget = new Budget();
        $budget->fill($request->all());
        $budget->client_id = $client->id;
        $budget->optic_id = $request->user->optic_id;

        try {
            $budget->save();
        } catch (Exception $e) {
            return 'error';
        }
        $budget->products()->sync($request->input('item_id'));

        foreach ($request->input('item_id') as $product_id) {
            $product = Product::find($product_id);
            $product->stock = $product->stock - 1;
            $product->save();
        }

        return redirect(route('sales-index'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $budget = Budget::find($id);
        if (!$budget) {
            return 'no existe budgeto';
        }
        $budget->fill($request->all());

        try {
            $budget->save();
        }catch (Exception $e) {
            return 'error';
        }

        return view('budget.index',  $budget);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $budget = Budget::find($id);
        if (!$budget) {
            return 'no existe budgeto';
        }

        try {
            $budget->destroy();
        }catch (Exception $e) {
            return 'error';
        }

        return view('budget.index',  $budget);
    }
}