<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TenderSection extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];
    protected $fillable = [
        'tender_id',
        'name',
    ];
    public function Tender()
    {
        return $this->belongsTo('App\Models\Tender');
    }

}
