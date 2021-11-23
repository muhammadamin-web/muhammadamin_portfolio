<?php

namespace App\Repository\Eloquent;

use App\Models\keyword;
use App\Repository\keywordRepositoryInterface;
use Illuminate\Support\Collection;

class KeywordRepository extends BaseRepository implements KeywordRepositoryInterface
{

   /**
    * keywordRepository constructor.
    *
    * @param keyword $model
    */
   public function __construct(Keyword $model)
   {
       parent::__construct($model);
   }


   /**
    * @return Collection
    */
   public function create(): Collection
   {
       return $this->model->create();    
   }
}