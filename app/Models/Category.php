<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "category";

    public $fillable = [
        'name',
    ];
}
