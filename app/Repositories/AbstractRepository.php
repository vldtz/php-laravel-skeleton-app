<?php
/**
 * User: VladC
 * Date: 28.01.2016
 * Time: 18:29
 */

namespace App\Repositories;

use App\Repositories\Exceptions\RepositoryException;
use App\Repositories\Interfaces\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class AbstractRepository implements Repository
{
	/**
	* @var App
	*/
	private $app;
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * Repository constructor.
	 * @param App $app
	 * @throws RepositoryException
	 */
	public function __construct(App $app)
	{
		$this->app = $app;
		$this->makeModel();
	}

	/**
	 * Specify Model class name
	 *
	 * @return Model
	 */
	abstract protected function model();

	/**
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @throws RepositoryException
	 */
	public function makeModel() {
		$model = $this->app->make($this->model());

		if (!$model instanceof Model)
			throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

		return $this->model = $model;
	}


	public function findAll($columns = array('*'))
	{
		return $this->model->all($columns);
	}

	public function paginate($perPage = 15, $columns = array('*'))
	{
		// TODO: Implement paginate() method.
	}

	public function create(array $data) {
		return $this->model->create($data);
	}

	public function update(array $data, $id, $attribute="id") {
		return $this->model->where($attribute, '=', $id)->update($data);
	}

	public function delete($id) {
		return $this->model->destroy($id);
	}

	public function find($id, $columns = array('*')) {
		return $this->model->find($id, $columns);
	}

	public function findOneBy($attribute, $value, $columns = array('*')) {
		return $this->model->where($attribute, '=', $value)->first($columns);
	}
}