<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Linhvuc extends Model
{
    protected $table = "Linhvuc";
    protected $primaryKey = 'id_lv';
   protected $fillable = [
        'tenlv',
    ];
 public $timestamps = false;
   }