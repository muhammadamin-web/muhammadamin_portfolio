<?php   

namespace App\Repositories;   

use App\Interfaces\BaseRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface 
{     
    /**      
     * @var Model      
     */     
     protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }

    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function delete(array $attributes): string
    {
        $this->model->delete($attributes);
        return "Successfully releted!";
    }
    
    /**
    * @param $id
    * @return Model
    */
    public function find($id) :?Model
    {
        return $this->model->find($id);
    }   
}