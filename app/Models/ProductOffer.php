<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOffer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
        'tender_id',
        'product_id',
        'company_id',
        'price',
        'is_matched',
        'is_accepted',
        'acceptance_rate',
        'description',
        'notes',
       
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }



}
