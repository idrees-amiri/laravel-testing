<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'student_records';

    protected $fillable = ['adm_no', 'dorm_room_no', 'session', 'house', 'age', 'year_admitted', 'grad', 'grad_date'];

    
}
