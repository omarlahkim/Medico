<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';


    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }
    public function marital_situation()
    {
        return $this->belongsTo(MaritalSituation::class);
    }
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
