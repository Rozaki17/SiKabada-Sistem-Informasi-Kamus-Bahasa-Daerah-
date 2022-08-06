<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, Uuids;

    public function article(){
        return $this->belongsToMany(
            Article::class, 'article_tags'
        );
    }
}
