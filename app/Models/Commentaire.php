<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['commentaire'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function commentaire() {
        return $this->belongsTo(Commentaire::class);
    }
}
