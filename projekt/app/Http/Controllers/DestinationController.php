<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DestinationController extends Controller
{
  public function index($id = null){
return 'destinacija index';

  }
  public function destroy($id){
  Destination::find($id)->delete();
      return 'destinacija izbrisana';
  }
  public function show($id){
   $destination = $this-> Destination ->findOrFail($id);
    return response()->json($destination);
  }
}
