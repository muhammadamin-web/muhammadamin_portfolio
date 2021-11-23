<?php

namespace App\Repositories;

use App\Models\Keyword;
use App\Interfaces\KeywordRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class KeywordRepository extends BaseRepository implements KeywordRepositoryInterface
{

   /**
    * KeywordRepository constructor.
    *
    * @param keyword $model
    */
    public function __construct(Keyword $model)
    {
        parent::__construct($model);
    }

    /**
     * Create a new keyword
     * 
     * @param array $data
     */
    public function create(array $attributes) : Collection
    {
        return Keyword::create($attributes);
    }
}