<?php

namespace app\Http\Models\Parts\Of;

use Illuminate\Database\Eloquent\Model;

class Speech extends Model
{
    protected $table = 'PARTS_OF_SPEECHS';
    protected $primaryKey = 'PARTS_OF_SPEECHS_ID';

    const CREATED_AT = 'PARTS_OF_SPEECHS_CREATE_AT';
    const UPDATED_AT = 'PARTS_OF_SPEECHS_UPDATED_AT';
    const DELETED_AT = 'PARTS_OF_SPEECHS_DELETED_AT';
}
