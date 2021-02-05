<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{


    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];

    protected $fillable = [
        'name',
        'email',
        'fax',
        'phone_number',
        'mobile',
        'work_place',
        'notes',
    ];


}
