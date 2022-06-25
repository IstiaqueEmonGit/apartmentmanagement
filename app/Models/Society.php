<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;
    protected $table = 'societies';
    public $timestamps = false;
    protected $fillable = [
        'society_name',
        'address',
        'number_of_apartments'
    ];
    public function apartment(){
        return $this->hasMany('App\Models\Apartment');
    }
}
