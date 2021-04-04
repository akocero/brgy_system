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
        return $this->hasOne(Victim::class);
    }

    public function suspect()
    {
        return $this->hasOne(Suspect::class);
    }

    public function reporter()
    {
        return $this->hasOne(Reporter::class);
    }

    public function childrenInvolved()
    {
        return $this->hasOne(ChildrenInvolved::class);
    }
}
