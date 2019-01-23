<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 6:56 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'brand_id',
        'type_id',
        'stock',
        'buy_price',
        'sell_price',
        'description',
        'color'
    ];

    public function productType()
    {
        return $this->belongsTo('App\ProductType', 'type_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function budget()
    {
        return $this->belongsToMany('App\Budget', 'items');
    }
}