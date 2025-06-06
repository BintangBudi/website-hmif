<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $fillable = ['nama'];
    
    public function kepengurusan()
    {
        return $this->hasMany(Kepengurusan::class);
    }
}
