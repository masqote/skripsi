<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddItems extends Model
{


	protected $table = 'additem';

	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $guarder = ['id' , 'created_at'];
}
