<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence; // base trait
use Sofa\Eloquence\Mappable; // extension trait

abstract class BaseModel extends Model
{
	use Eloquence, Mappable;


	public $timestamps = false;
}
