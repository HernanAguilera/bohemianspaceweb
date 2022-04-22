<?php

namespace App\Repositories;

use App\Models\Content;
use App\Models\ContentType;
use Illuminate\Database\Eloquent\Collection;

class ContentTypeRepository
{
    public function all(): Collection {
        return ContentType::all();
    }
}
