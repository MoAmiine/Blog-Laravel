<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
        protected $fillable = ['title', 'content', 'tags'];

        public function categorie(): BelongsTo{
            return $this->belongsTo(Categorie::class, 'categories_id');
        }

        
}
