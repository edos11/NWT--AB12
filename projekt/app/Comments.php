<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comments extends Model{
  protected $table = 'comments';
  public $timestamps = false;
  protected $fillable = [
    'name',
    'description',
    'picture'
  ];
}
 ?>
