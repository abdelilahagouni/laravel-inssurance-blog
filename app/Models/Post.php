<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','description','image_path','user_id'
    ];
    public function user(){  //properties on OOP
        return $this-> belongsTo(User::class);  
    }
}
