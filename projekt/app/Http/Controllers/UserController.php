<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
  public function index(){
      return User::all();
  }
  public function create(){
      return 'Korisnik kreiran';
  }
  public function prikaziformu(){
      return view('form');
  }
  public function store(Request $request){
      $user = new User;
      /*
      napravio sam bio formu sa koje cu ocitavat podatke
      ali nisam uspio da psoljem sa iste prako psot rute
      pa sam samo zaodirao sad za sad .
      public function prikaziformu()


      $user->username= $request->input('username');
      $user->password= $request->input('password');
      $user->name= $request->input('name');
      $user->lastName= $request->input('lastName');
      $user->telephone= $request->input('telephone');*/
      $user->username= 'username';
      $user->password= 'password';
      $user->name= 'name';
      $user->lastName= 'lastName';
      $user->telephone= 'telephone';
      $user->reservation=1;
      $user->newsId=1;
      $user->destinationId=1;
      $user ->save();
      return 'korsinik kreiran';
  }
  public function show($id){
    return User::find($id);
  }
  public function edit(){
    return 'edit';
      //
  }
  public function update(Request $request,$id)
  {
    //validaciju cu raditi preko Request kalsa 
    $user = User::find($id);
    $user->username= $request->input('username');
    $user->password= $request->input('password');
    $user->name= $request->input('name');
    $user->lastName= $request->input('lastName');
    $user->telephone= $request->input('telephone');
    $user ->save();
}
  public function destroy($id){
      User::find($id)->delete();
      return 'Korisnik izbrisan';
  }
}
