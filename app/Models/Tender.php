<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tender extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
        'contact_id',
        'description',
        'notes',
        'status',
        'start_date',
        'end_date',
        
    ];
}
