<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; 
use Session;
class TodosController extends Controller
{
 public   function index(){
 	$todos = Todo::latest()->orderBy('created_at', 'DESC')->get();
 return view('todos')->with('todos',$todos);

    }

 public   function store(Request $request){
 	 
 	 $todo = new Todo;
 	 $todo->todo =$request->todo;
 	 $todo->save();
     Session::flash('success','New Todo created');
 	 return redirect()->back();
    }

    public function delete($id){
    	$todo = Todo::find($id);
    	$todo->delete();
        Session::flash('success','Todo Deleted Successfully');
    	return redirect()->back();
    }

     public function update($id){
    	$todo = Todo::find($id);
    	
    	return view('update')->with('todo',$todo);
    }
    public function save(Request $request, $id){
    	$todo = Todo::find($id);
 	 $todo->todo =$request->todo;
 	 $todo->save();
     Session::flash('success','Todo Updated');
 	 return redirect('/');
    }
}
