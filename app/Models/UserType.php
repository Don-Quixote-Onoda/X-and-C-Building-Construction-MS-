<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    protected $table = 'user_types';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function users() {
        return $this->hasMany('App\Models\User');
    }

}
