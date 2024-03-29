<?php

namespace Fremee;

use Illuminate\Database\Eloquent\Model;

class LinkedSocialAccount extends Model
{
    protected $fillable = ['provider_name', 'provider_id' ];

    public function user()
    {
        return $this->belongsTo('Fremee\User');
    }

}
