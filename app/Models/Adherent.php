<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gouvernorat;
use App\Models\City;

class Adherent extends Model
{
    use HasFactory;
    protected $table = 'adherents';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','tel','cin', 'adress','uuid', 'gov_id','city_id'];

    public function cities() {
        return $this->hasMany(City::class);
    }

    public function gouvernorats() {
        return $this->hasMany(Gouvernorat::class);
    }

}
