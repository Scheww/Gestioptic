<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 6:54 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address','phone','email','id_number'
    ];

    public function optic()
    {
        return $this->hasone('App\Optic', 'optic_id');
    }

    public function recipe()
    {
        return $this->belongsToMany('App\Recipes');
    }
}