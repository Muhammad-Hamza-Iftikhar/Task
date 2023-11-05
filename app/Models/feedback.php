<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category',
    ];
    public function comment(){
        return $this->hasMany(comments::class);
    }
}
