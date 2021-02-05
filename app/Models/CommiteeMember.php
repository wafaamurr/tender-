<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommiteeMember extends Model
{   use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
        'person_id',
        'commitee_id',
    ];
   
}
