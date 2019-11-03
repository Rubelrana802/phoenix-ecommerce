<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Websetting extends Model
{
    
/**

* The attributes that are mass assignable.

*

* @var string

*/

//use Notifiable;



protected $table = 'web_setting';

/**

* The attributes that are mass assignable.

*

* @var array

*/

// protected $fillable = ['email', 'password'];


//use user id of admin

protected $primaryKey = 'setting_id';

//public $table = true;

}
