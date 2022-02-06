<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'QUIZZES';
    protected $primaryKey = 'QUIZ_ID';

    const CREATED_AT = 'QUIZ_CREATED_AT';
    const UPDATED_AT = 'QUIZ_UPDATED_AT';
    const DELETED_AT = 'QUIZ_DELETED_AT';
}
