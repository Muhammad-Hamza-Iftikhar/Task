<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table = "feedback";
    protected $primaryKey = "id";
    protected $fillable = [
        'content',
        'userId',
        'feedbackId',
    ];

    public function user(){
        return $this->belongsTo(User::class,'userId');
    }
    public function company(){
        return $this->belongsTo(feedback::class,'feedbackId');
    }
}
