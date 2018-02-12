<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\NameRepository;
use App\Models\Name;
use App\Validators\NameValidator;

/**
 * Class NameRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class NameRepositoryEloquent extends BaseRepository implements NameRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Name::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
