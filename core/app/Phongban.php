<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phongban extends Model
{
    protected $table = "phongban";
    protected $primaryKey = 'id_pb';
    protected $fillable = [
        'tenpb',
    ];

public $timestamps = false;

public function user()
{
	return $this->hasMany('App\User','id_pb','id_pb');
}

}