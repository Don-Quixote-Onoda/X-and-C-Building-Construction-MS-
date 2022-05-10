<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function projects() {
        return $this->hasMany('App\Models\Project');
    }
}
