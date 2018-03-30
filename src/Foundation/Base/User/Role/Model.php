<?php
namespace TMFW\Foundation\Base\User\Role;

use TMFW\Foundation\Traits\User\Role\ScopesTrait;
use Zizaco\Entrust\EntrustRole;

class Model extends EntrustRole
{
    use ScopesTrait;

    protected $table = 'roles';

    protected $fillable = [
        'name', 'display_name', 'description'
    ];

    public function designations()
    {
        return $this->belongsToMany(sys('model.company.designation'), 'designation_role');
    }

}
