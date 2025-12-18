<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'category', 'urlImage'];

    public function purchases(){
        return $this -> hasMany(Purchase::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'purchases')
                    ->withPivot('purchase_date')
                    ->withTimestamps();
    }

    


}
