<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewdec extends Model
{
    use HasFactory;

    protected $fillable = [
        'declaration_id',
        'user_id',
        'IP',
        'subject',
        'review',
    ];

    public function declaration(){
        return $this->belongsTo(Declaration::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
