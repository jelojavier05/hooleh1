<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enforcer extends Model
{
    protected $table = 'tblEnforcer';
    protected $primaryKey = 'intEnforcerID';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
