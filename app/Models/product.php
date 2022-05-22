<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function supplier()
    {
        return $this->belongsTo(supplier::class);
    }
    public function stock()
    {
        return $this->hasOne(stock::class);
    }
}
