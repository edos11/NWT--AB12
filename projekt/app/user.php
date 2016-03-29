<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class user extends Model{
  protected $table = 'user';
  public $timestamps = false;
  protected $fillable = [
    'username',
    'password',
    'name',
    'lastName',
    'telephone',
    'reservation'
  ];

}
 ?>
