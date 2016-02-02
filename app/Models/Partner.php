<?php

namespace App\Models;

class Partner extends BaseModel
{
    public $timestamps = true;
    const CREATED_AT = 'pa_created_at';
    const UPDATED_AT = 'pa_updated_at';

    protected $primaryKey = 'pa_id';
    protected $maps = [
        'id' => 'pa_id',
        'name' => 'pa_name',
        'type' => 'pa_type',
        'createdAt' => 'pa_created_at',
        'updatedAt' => 'pa_updated_at',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
