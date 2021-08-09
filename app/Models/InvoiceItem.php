<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
      'invoice_id',
      'name',
      'quantity',
      'subprice',
      'tax',
      'total'
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
