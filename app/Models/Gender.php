<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';


    public function patient()
    {
        $this->hasMany(User::class);
    }
}
