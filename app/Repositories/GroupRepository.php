<?php

namespace App\Repositories;

use App\Models\Group;

class GroupRepository
{
    /** @var GroupRepository */

    public function __construct()
    {
    }

    public function findAll($params):array
    {
        $groups = Group::where('GROUP_STATUS', 1)->get();
        $groups->toJson();
        return compact('groups');
    }

    public function findbyPk($group_id):array
    {
        $group = Group::find($group_id);
        $group->toArray();
        return compact('group');
    }

    public function update($params):array
    {
        $group = Group::find($params['GROUP_ID']);
        $group['GROUP_NAME'] = data_get($params, 'GROUP_NAME', $group['GROUP_NAME']);
        $group['GROUP_STATUS'] = data_get($params, 'GROUP_STATUS', $group['GROUP_STATUS']);
        $group['GROUP_NOTE'] = data_get($params, 'GROUP_NOTE', $group['GROUP_NOTE']);
        $group->update();

        return compact('group');
    }
}
