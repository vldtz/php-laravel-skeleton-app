<?php
/**
 * User: VladC
 * Date: 28.01.2016
 * Time: 18:10
 */

namespace App\Repositories\Interfaces;


interface Repository
{
	/**
	 * @param array $columns
	 * @return mixed
	 */
	public function findAll($columns = array('*'));

	/**
	 * @param int $perPage
	 * @param array $columns
	 * @return mixed
	 */
	public function paginate($perPage = 15, $columns = array('*'));

	public function create(array $data);

	/**
	 * @param array $data
	 * @param $id PK
	 * @return mixed
	 */
	public function update(array $data, $id);

	/**
	 * @param $id PK
	 * @return mixed
	 */
	public function delete($id);

	/**
	 * @param $id PK
	 * @param array $columns
	 * @return mixed
	 */
	public function find($id, $columns = array('*'));

	/**
	 * @param $attribute
	 * @param $value
	 * @param array $columns
	 * @return mixed
	 */
	public function findOneBy($attribute, $value, $columns = array('*'));
}