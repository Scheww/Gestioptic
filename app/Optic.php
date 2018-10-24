<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 6:54 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Optic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'city','phone','email'
    ];

    public function productType()
    {
        return $this->hasMany('App\ProductType');
    }

    public function brand()
    {
        return $this->hasMany('App\Brands');
    }

    public function budget()
    {
        return $this->hasMany('App\Budget');
    }
}