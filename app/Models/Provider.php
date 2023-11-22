<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable=['nom_provider',
    'prenom_provider',
    'description',
    'photo',
    'phone_number',
    'Region_id',
    'Activity_id',
    'User_id'
    ];

    public function Activity(){
        return $this->belongsTo(Activity::class);
    }
    public function Region(){
        return $this->belongsTo(Region::class);
    }
}
