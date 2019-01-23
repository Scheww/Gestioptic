<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 7:00 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'budget_id'
    ];

    public function product()
    {
        return $this->hasOne('App\Product');
    }

    public function budget()
    {
        return $this->hasOne('App\Budget');
    }
}