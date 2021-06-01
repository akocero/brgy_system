<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function household()
    {
        return $this->belongsTo(Household::class);
    }

    public function covid_patient()
    {
        return $this->belongsTo(CovidPatient::class);
    }

    public function purok()
    {
        return $this->belongsTo(Purok::class);
    }
}
