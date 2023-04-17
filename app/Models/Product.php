<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //definit les champ accessible à partir du public (ex : saisie d'un ofrmulaire)
    protected $fillable=['nom','photo','description','prix','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
     }
}
