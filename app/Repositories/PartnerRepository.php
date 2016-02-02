<?php

namespace App\Repositories;

use App\Models\Partner;

class PartnerRepository extends AbstractRepository{

    protected function model() {
        return Partner::class;
    }

}