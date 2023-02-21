<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gouvernorat;
use App\Models\Adherent;



class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'gov_id'];

    public function gouvernorat() {
        return $this->belongsTo(Gouvernorat::class);
    }
    public function adherent() {
        return $this->belongsTo(Adherent::class);
    }

}
