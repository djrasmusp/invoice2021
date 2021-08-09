<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'zipcode',
        'city',
        'phone',
        'email',
        'cvr',
        'logo'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'users_companies', 'company_id', 'user_id');
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }

    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function expenses() {
        return $this->hasMany(Expense::class);
    }

    public function paymentmethods() {
        return $this->hasMany(PaymentMethod::class);
    }
}
