<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class service extends Model{
  protected $table = 'service';
  public $timestamps = false;
  protected $fillable = [
    'name',
    'description',
    'picture'
  ];

}
 ?>