<?php

namespace TMFW\Foundation\Base\User\Disability;

use Illuminate\Database\Eloquent\SoftDeletes;
use TMFW\Foundation\BaseModel;
use TMFW\Contracts\Foundation\Model\UserDisability;

class Model extends BaseModel implements UserDisability
{
    use SoftDeletes;

    protected $table = 'user_disability_types';

    protected $fillable = [
        'name'
    ];
}
