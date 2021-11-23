<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface KeywordRepositoryInterface
{
   public function create(array $attributes): Collection;
}