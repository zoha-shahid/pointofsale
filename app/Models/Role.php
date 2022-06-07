<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['category','Role'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
        $this->attributes['Role'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
        return $this->attributes['Role'] = json_decode($value);
    }
}


