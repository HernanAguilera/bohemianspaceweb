<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentTag extends Model
{
    use HasFactory;

    public function contents() {
        return $this->belongsToMany(Content::class, 'content_content_tag');
    }
}
