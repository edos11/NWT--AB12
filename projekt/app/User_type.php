<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class User_type extends Model{
  protected $table = 'user_type';
  public $timestamps = false;
  protected $fillable = [
    'username',
    'prvilegion'
  ];
}
 ?>
