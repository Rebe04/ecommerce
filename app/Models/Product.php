<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    //Relación uno a muchos

    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //Relación uno a muchos inversa

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relación muchos a muchos

    public function colors(){
        return $this->hasMany(Color::class);
    }

    //Relación uno a muchos polimorfica

    public function image(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
