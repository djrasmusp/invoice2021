<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'client_id',
        'duedate',
        'paid',
    ];

    public function items(){
        return $this->hasMany(InvoiceItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function getRouteKeyName()
    {
        return 'invoice_id';
    }
}
