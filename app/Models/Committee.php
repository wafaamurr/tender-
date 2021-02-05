<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Committee extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
       
        'tender_section_id',
        'tender_id',
        'name',
        'type',
    ];
   

    public function members()
    {
        return $this->belongsToMany('App\Models\People','commitee_members');
    }
}
