<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'GROUPS';
    protected $primaryKey = 'GROUP_ID';

    const CREATED_AT = 'GROUP_CREATED_AT';
    const UPDATED_AT = 'GROUP_UPDATED_AT';
    const DELETED_AT = 'GROUP_DELETED_AT';
}
