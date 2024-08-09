<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Commission extends Model
{
    use HasFactory, Notifiable;

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class, 'affiliated_id');
    }
}
