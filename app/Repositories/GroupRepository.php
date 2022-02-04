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
        $groups = Group::all();
        $groups->toJson();
        return compact('groups');
    }

    public function findbyPk($group_id):array
    {
        $group = Group::find($group_id);
        $group->toArray();
        return compact('group');
    }
}
