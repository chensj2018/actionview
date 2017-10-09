<?php

namespace App\Project\Eloquent;

use Jenssegers\Mongodb\Eloquent\Model;

class Board extends Model
{
    //
    protected $table = 'board';

    protected $fillable = array(
        'project_key',
        'name',
        'columns',
        'filters',
        'query',
        'creator'
    );
}
