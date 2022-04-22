<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

    public const ALBUM = 'album';
    public const PHOTO = 'photo';

    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function fields() {
        return $this->belongsToMany(ContentField::class, 'content_field_content_type');
    }
}
