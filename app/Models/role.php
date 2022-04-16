<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class role extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];

    public function users():HasMany{
        return $this->hasMany(User::class);
    }
}
