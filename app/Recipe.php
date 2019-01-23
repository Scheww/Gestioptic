<?php
/**
 * Created by PhpStorm.
 * User: Luki Note
 * Date: 8/28/2018
 * Time: 7:00 p.m.
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'medic',
        'esferic_left_eye_near',
        'cilindric_right_eye_near',
        'esferic_right_eye_near',
        'cilindric_left_eye_near',
        'near_armazon',
        'cilindric_right_eye_intermediate',
        'esferic_right_eye_intermediate',
        'cilindric_left_eye_intermediate',
        'esferic_left_eye_intermediate',
        'intermediate_armazon',
        'cilindric_right_eye_far',
        'esferic_right_eye_far',
        'cilindric_left_eye_far',
        'esferic_left_eye_far',
        'far_armazon',
        'observations',
        'multifocal',
        'bifocal',
        'height',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}