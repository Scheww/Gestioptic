<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 6:57 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function optic()
    {
        return $this->hasOne('App\Optic');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}