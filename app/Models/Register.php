<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    // protected $table = 'registers';
    // protected $primaryKey = 'id';
    // protected $foreignKey = 'role_id';
    protected $timestamp = true;    
}
