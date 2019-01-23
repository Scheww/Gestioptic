<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 7:00 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'payment_form',
        'discount',
        'optic_id'
    ];

    public function optic()
    {
        return $this->belongsTo('App\Optic');
    }


    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'budget_items');
    }
}