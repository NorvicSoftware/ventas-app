<?php

namespace App\Repositories;

use App\Models\Category;

class RepositoryCategory
{
    public $a = 10;

    public function getCategories()
    {
        return Category::all();
    }

}
