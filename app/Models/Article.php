<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ['id'];

    public function show () {
        
    }

    public function tags(){
        return $this->belongsToMany(
            Tag::class, 'article_tags'
        );
    }
}
