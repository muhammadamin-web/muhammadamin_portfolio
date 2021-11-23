<?php

namespace App\Interfaces;


use Illuminate\Database\Eloquent\Model;

   /**
   * Interface BaseRepositoryInterface
   * @package App\Repositories
   */
interface BaseRepositoryInterface
{
   /**
    * @param array $attributes
    * @return Model
    */
   public function delete(array $attributes): string;


   /**
    * @param $id
    * @return Model
    */
   public function find($id): ?Model;
}
