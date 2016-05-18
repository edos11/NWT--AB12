<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Http\Requests;

class NewsController extends Controller
{
//  protected $news;
  public function __construct(News $news)
    {
        $this->news = $news;
    }
  public function index($id = null){
      	if ($id == null) {
           return News::orderBy('id', 'asc')->get();
        } else {
           return $this->show($id);
      }
  }
  public function create(){

  }
  public function obrisi($id){
      News::find($id)->delete();
  }
  public function store(Request $request){
       $news = new News;
       $news->title = $request->input('novost.title');
       $news->image_link = $request->input('novost.image_link');
       $news->description = $request->input('novost.description');
       $news->created_at = $request->input('novost.created_at');
       $news->save();
       return 'news record successfully created with id ' . $news->id;
  }
  public function show($id){
    $news = $this-> news ->findOrFail($id);
    return response()->json($news);
  }
  public function edit(){
      //
  }
  public function update(Request $request, $id){
    $input = array_except(Input::all(), '_method');
    $v=Validator::make($input, Post::$rules);
    if($v->passes()){
      $news = $this ->news ->find($id);
      $news->update($input);
      return View::make('news.show', $id);
    }
    return Redirect::route('news.edit', $id)
        ->withInput()
        ->withErrors($v)
        ->wihtInput('message', 'Problem u validcaciji');
  }
  public function destroy(Request $request){
        $news = News::find($request->input('id'));

        $news->delete();

        return "Employee record successfully deleted #" . $request->input('id');
  }
}
