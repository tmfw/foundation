<?php

namespace TMFW\Foundation\Base\User\Notice;

use TMFW\Foundation\BaseModel;
use TMFW\Contracts\Foundation\Model\UserNotice;

class Model extends BaseModel implements UserNotice
{

    protected $table = 'user_notice_receivers';

    protected $fillable = [
        'user_notice_id', 'user_id', 'seen'
    ];

    public function receiver()
    {
        return $this->belongsTo(sys('model.user'), 'user_id');
    }

    public function notice()
    {
        return $this->belongsTo(sys('model.notice'), 'user_notice_id');
    }
}
