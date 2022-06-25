<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;
    protected $table = 'flats';
    public $timestamps = false;
    protected $fillable = [
        'apartment_no',
        'flat_no',
        'owner_name',
        'tenant_name',
        'service_charge'
    ];
    public function appartment(){
        return $this->belongsTo('App\Models\Apartment');
    }
    public function owner(){
        return $this->hasOne('App\Models\Owner');
    }
    public function tenant(){
        return $this->hasOne('App\Models\Tenant');
    }
}
