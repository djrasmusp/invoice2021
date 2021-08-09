<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'content',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
