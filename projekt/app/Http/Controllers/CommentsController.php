<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{
  public function destroy($id){
      Comments::find($id)->delete();
      return 'Komentar izbrisan';
  }
  public function show($id){
    return Comments::find($id);
  }
}
