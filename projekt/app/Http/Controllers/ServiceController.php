<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
  public function show($id){
    return Service::find($id);
  }
    public function destroy($id){
        Service::find($id)->delete();
        return 'Uluga izbrisana';
    }
}
