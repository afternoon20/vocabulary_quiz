<?php

namespace App\Services;

use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

class HomeService
{
    /** @var GroupRepository */
    public GroupRepository $groupRepository;
    public $homeService;

    public function __construct()
    {
        $this->groupRepository = new GroupRepository;
    }

    public function findAll($params):array
    {
        $this->homeService = $this->groupRepository->findAll($params);

        return $this->homeService;
    }
}
