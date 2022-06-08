<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeName extends Model
{
    use HasFactory;
    
    protected $table = 'employee_names';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function cheques() {
        return $this->hasMany('App\Models\Cheque');
    }

    public function refunds() {
        return $this->hasMany('App\Models\Refund');
    }
}
