<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Can override the table that is mapped with this model.
    protected $table = "companies";
    // Specify the columns that are fillable
    protected $fillable = ['name', 'address', 'email', 'website'];
}
