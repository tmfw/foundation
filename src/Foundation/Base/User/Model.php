<?php

namespace TMFW\Foundation\Base\User;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use TMFW\Foundation\Traits\User\AttributesTrait;

class Model extends Authenticatable
{

    use SoftDeletes;

    use AttributesTrait;

    protected $table = 'users';

    protected $dates = ['updated_at', 'created_at', 'deleted_at'];

    protected $fillable = [
        //
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}