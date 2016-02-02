<?php

namespace App\Services;


use App\Repositories\PartnerRepository;

class PartnerService {

    /**
     * @var PartnerRepository
     */
    protected $partnerRepository;

    /**
     * PartnerService constructor.
     * @param PartnerRepository $partnerRepository
     */
    public function __construct(PartnerRepository $partnerRepository) {
        $this->partnerRepository = $partnerRepository;
    }


    /**
     * @param $id
     * @return mixed
     */
    function getPartner($id) {
        return $this->partnerRepository->find($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     */
    function getPartnerList() {
        return $this->partnerRepository->findAll();
    }
}