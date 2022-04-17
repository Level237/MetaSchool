<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\topic;

class school extends Model
{
    use HasFactory;

    public function topics()
    {
        return $this->morphedByMany(topic::class,'topicable');
    }
}
