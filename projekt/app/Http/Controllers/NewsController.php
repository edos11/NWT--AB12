<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
  public function show($id){
    return News::find($id);
  }
  public function destroy($id){
      News::find($id)->delete();
      return 'novost izbrisana';
  }
}
