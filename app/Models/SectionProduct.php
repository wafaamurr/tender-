<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionProduct extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
        'tender_id',
        'tender_section_id',
        'product_id',
        'quantity',
        'notes',
    ];
}
