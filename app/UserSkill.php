<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    //
    protected $table = 'user_skill';
    protected $primaryKey = 'user_skill_id';
    public $incrementing = false;
}
