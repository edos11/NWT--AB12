<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReservationController extends Controller
{
  public function show($id){
    return Reservation::find($id);
  }
  public function destroy($id){
      Reservation::find($id)->delete();
      return 'Rezervacija izbrisana';
  }
}
