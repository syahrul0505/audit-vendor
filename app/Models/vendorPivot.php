<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorPivot extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'vendorr_pivot';
    

    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(vsendor::class);
    }
}
