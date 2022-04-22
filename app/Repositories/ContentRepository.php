<?php

namespace App\Repositories;

use App\Models\Content;
use App\Models\ContentType;
use Illuminate\Database\Eloquent\Collection;

class ContentRepository
{
    public function allAlbums(): Collection {
        return Content::join('content_types', 'contents.id', '=', 'content_types.id')
                        ->where('content_types.name', '=', ContentType::ALBUM)
                        ->get();
    }
}
