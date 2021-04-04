<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function victim()
    {
        return $this->belongsTo(Victim::class);
    }

    public function suspect()
    {
        return $this->belongsTo(Suspect::class);
    }

    public function reporter()
    {
        return $this->belongsTo(Reporter::class);
    }

    public function childrenInvolved()
    {
        return $this->belongsTo(ChildrenInvolved::class);
    }
}
