<?php

namespace App\Models;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
