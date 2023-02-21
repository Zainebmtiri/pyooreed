<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Adherent;


class Gouvernorat extends Model
{
    use HasFactory;
    protected $table = 'gouvernorats';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function cities() {
        return $this->hasMany(City::class);
    }
    public function adherent() {
        return $this->belongsTo(Adherent::class);
    }

    
}

