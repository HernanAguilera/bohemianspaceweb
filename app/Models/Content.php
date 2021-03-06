<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(CategoryContent::class);
    }

    public function type() {
        return $this->belongsTo(ContentType::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'content_content_tag');
    }

    public function fields() {
        return $this->belongsToMany(ContentField::class, 'content_content_field')->withPivot('value');
    }

    public function parent() {
        return $this->belongsTo(Content::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(Content::class, 'parent_id');
    }
}
