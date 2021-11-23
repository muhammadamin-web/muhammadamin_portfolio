<?php
namespace App\Repository;

use App\Models\Keyword;
use Illuminate\Support\Collection;

interface KeywordRepositoryInterface
{
   public function create(): Collection;
}