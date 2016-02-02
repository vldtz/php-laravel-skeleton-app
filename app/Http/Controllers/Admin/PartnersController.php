<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Partner;
use App\Services\PartnerService;
use Request;

class PartnersController extends Controller
{
    /**
     * @var PartnerService
     */
    private $partnerService;

    /**
     * PartnersController constructor.
     * @param PartnerService $partnerService
     */
    public function __construct(PartnerService $partnerService) {
        $this->middleware('auth');

        $this->partnerService = $partnerService;
    }


    public function index(){
        $partners = $this->partnerService->getPartnerList();
        return view('admin/partners/index',compact('partners'));
    }

    public function create () {
        return view('admin/partners/create');
    }

    public function store() {
        $input = Request::all();

        Partner::create($input);
        return redirect('partners');
    }
}
