<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class User extends Model
 {   
    protected $fillable = [
        'id', 'password', 'avatar', 'no_hp', 'hobi', 'avatar', 'created_at', 'updated_at'
    ];

   
}
