<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalSituation extends Model
{
    use HasFactory;
    protected $table = 'marital_situations';




    public function patient()
    {
        $this->hasMany(Patient::class);
    }
}
