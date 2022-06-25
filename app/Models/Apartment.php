<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $table = 'apartments';
    public $timestamps = false;
    protected $fillable = [
        'society_name',
        'apartment_name',
        'apartment_no',
        'address',
        'owners',
        'tenants',
        'flats'
    ];
    public function society(){
        return $this->belongsTo('App\Models\Society');
    }
    public function flat(){
        return $this->hasMany('App\Models\Flat');
    }

}
