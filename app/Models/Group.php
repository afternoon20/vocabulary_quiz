<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'GROUPS';
    protected $primaryKey = 'GROUP_ID';

    const CREATED_AT = 'GROUPS_CREATE_AT';
    const UPDATED_AT = 'GROUPS_UPDATED_AT';
    const DELETED_AT = 'GROUPS_DELETED_AT';
}
