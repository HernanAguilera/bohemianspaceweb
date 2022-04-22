<?php

namespace App\Repositories;

use App\Models\CategoryContent;
use Illuminate\Database\Eloquent\Collection;

class CategoryContentRepository
{
    public function all(): Collection {
        return CategoryContent::all();
    }
}
