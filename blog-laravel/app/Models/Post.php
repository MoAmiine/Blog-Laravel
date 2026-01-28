<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
        private int $id;
        private string $title;
        private string $content;
        private $tags = [];



        public function getId(): int
        {
                return $this->id;
        }

        public function setId(int $id): self
        {
                $this->id = $id;

                return $this;
        }

        public function getTitle(): string
        {
                return $this->title;
        }

        public function setTitle(string $title): self
        {
                $this->title = $title;

                return $this;
        }

        public function getContent(): string
        {
                return $this->content;
        }

        public function setContent(string $content): self
        {
                $this->content = $content;

                return $this;
        }

        public function getTags()
        {
                return $this->tags;
        }

        public function setTags($tags): self
        {
                $this->tags = $tags;

                return $this;
        }

        public function categorie(): BelongsTo{
            return $this->belongsTo(Categorie::class, 'categories_id');
        }
        
        
}
