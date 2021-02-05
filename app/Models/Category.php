<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $date=['deleted_at']; 
     use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
  
}
