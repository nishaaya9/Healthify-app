<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = "patients";

    protected $primaryKey = 'p_id';
    //protected $fillable = ['stud_name', 'stud_city', 'stud_contact', 'stud_image'];
    protected $timestamp = true;
}
