<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $table = 'trashes';
    protected $fillable = ['category_id', 'name', 'category_name'];
}
