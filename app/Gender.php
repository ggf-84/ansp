<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_ro',
        'title_ru',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
    ];

    public $timestamps = true;
}
