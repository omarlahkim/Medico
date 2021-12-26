<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;



    public function patient()
    {
        $this->belongsTo(Patient::class);
    }
    public function drugs()
    {
        $this->belongsToMany(Drug::class, 'precription_lines')->withPivot(['bf_breakfast', 'af_breakfast', 'bf_launch', 'af_launch', 'bf_dinner', 'af_dinner', 'quantity'])->withTimestamps();
    }
}
