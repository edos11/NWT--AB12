<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DestinationController extends Controller
{
  public function destroy($id){
      Destination::find($id)->delete();
      return 'Destinacija izbrisana';
  }
  public function show($id){
    return Destination::find($id);
  }
}
