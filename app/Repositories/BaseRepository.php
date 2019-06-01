<?php
/**
 * User: jrb
 * Date: 6/1/19
 * Time: 7:04 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    // constructor

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param int $id
     * @return mixedmixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update(int $id, array $attributes)
    {
        return $this->find($id)->update($attributes);
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete($id);
    }

}