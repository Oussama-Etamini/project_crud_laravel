<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title','contenu','date_pub','picture'];

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }
    
}
