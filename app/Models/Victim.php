<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blotter()
    {
        return $this->belongsTo(Blotter::class);
    }
}
