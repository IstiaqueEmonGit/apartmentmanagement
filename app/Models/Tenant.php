<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $table = 'tenants';
    public $timestamps = false;

    protected $fillable = [
        'flat_no',
        'name',
        'NID',
        'email',
        'occupation',
        'rent'
    ];
    public function flat(){
        return $this->belongsTo('App\Models\Flat');
    }
}
