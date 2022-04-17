<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use App\Models\school;

class topic extends Model
{
    use HasFactory;

    public function schools():MorphToMany
    {
        return $this->morphToMany(school::class,'topicable');
    }
}
