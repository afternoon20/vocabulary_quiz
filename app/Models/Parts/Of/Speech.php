<?php

namespace app\Models\Parts\Of;

use Illuminate\Database\Eloquent\Model;

class Speech extends Model
{
    protected $table = 'PARTS_OF_SPEECHS';
    protected $primaryKey = 'PARTS_OF_SPEECHS_ID';
    public $incrementing = false;

    const CREATED_AT = 'PARTS_OF_SPEECHS_CREATED_AT';
    const UPDATED_AT = 'PARTS_OF_SPEECHS_UPDATED_AT';
    const DELETED_AT = 'PARTS_OF_SPEECHS_DELETED_AT';
}
