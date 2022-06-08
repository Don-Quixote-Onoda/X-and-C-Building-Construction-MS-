<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $table = 'refunds';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function employee_name(){
        return $this->belongsTo('App\Models\EmployeeName');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }
}
