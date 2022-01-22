<?php

namespace app\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'QUIZZES';
    protected $primaryKey = 'QUIZ_ID';

    const CREATED_AT = 'QUIZZES_CREATE_AT';
    const UPDATED_AT = 'QUIZZES_UPDATED_AT';
    const DELETED_AT = 'QUIZZES_DELETED_AT';
}
