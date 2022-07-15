<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use hasFactory;

    protected $table = 'contacts';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    // Inverse relationship method to match with company
    public function company()
    {
        // Eloquent will try to find a company which 'id' matches with the 'company_id' value
        // We can also provide a different foreign key attribute name here
        return $this->belongsTo(Company::class);
    }
}
