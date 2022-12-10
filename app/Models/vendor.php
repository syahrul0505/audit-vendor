<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;

    protected $table = 'vendorr';
    

    protected $guarded = [];

    public function vendorPivot()
    {
        return $this->hasMany(vendorPivot::class);
    }
}
