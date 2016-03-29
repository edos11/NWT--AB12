<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class destination extends Model{
  protected $table = 'destination';
  public $timestamps = false;
  protected $fillable = [
    'country',
    'city',
    'description'
  ];
}
 ?>
