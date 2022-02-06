<?php

namespace App\Services\System\Admin;

use App\Repositories\QuizRepository;
use App\Repositories\GroupRepository;

use Illuminate\Http\Request;

class QuizService
{
    /** @var QuizRepository */
    public QuizRepository $quizRepository;
    public $quizService;
    /** @var GroupRepository */
    public GroupRepository $groupRepository;
    public $groupService;

    public function __construct(&$data)
    {
        $this->quizRepository = new QuizRepository;
        $this->groupRepository = new GroupRepository;
        $data['masterList'] = $this->quizRepository->setMaster();
    }

    public function findAll($params):array
    {
        $this->quizService = $this->quizRepository->findAll($params);

        return $this->quizService;
    }

    public function findGroupAndQuizzes(int $group_id):array
    {
        $this->quizService = $this->groupRepository->findbyPk($group_id);
        $params['quiz_group_id'][] = $this->quizService['group']['GROUP_ID'];
        $this->quizService += $this->quizRepository->find($params, '*', 'QUIZ_ORDER');
        return $this->quizService;
    }

    public function updateGroupAndQuizzes($params):array
    {
        $this->quizService = $this->groupRepository->update($params);
        $params['QUIZ_GROUP_ID'] = $this->quizService['group']['GROUP_ID'];
        $params['QUIZ_STATUS'] = $this->quizService['group']['GROUP_STATUS'];

        // $quizParams = [];
        $this->quizService += $this->quizRepository->update($params);
        return $this->quizService;
    }
}
