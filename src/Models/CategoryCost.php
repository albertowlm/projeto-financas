<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 06/01/2018
 * Time: 00:08
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class CategoryCost extends Model
{
    //Mass Assignment
    protected $fillable = [
        'name'
    ];
}