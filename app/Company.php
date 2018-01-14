<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_id';
    public $timestamps = false;

    public function job() {
    	return $this->hasMany('App\Job', 'company_id', 'company_id');
    }
}
