<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Chucvu extends Model
{
    protected $table = "Chucvu";
    protected $primaryKey = 'id_cv';
   protected $fillable = [
        'tencv',
    ];
 public $timestamps = false;
   }