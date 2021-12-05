<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ["category_id","title","content","image"];
    function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
