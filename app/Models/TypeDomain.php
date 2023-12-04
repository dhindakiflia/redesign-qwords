<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDomain extends Model
{
    use HasFactory;

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
