<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos=Todo::orderby('created_at','desc')->paginate(7);
        return view('todos')->with('todos',$todos);
    }
    
    public function store(Request $request){
        $todo= new Todo;
        $todo->todo=$request->todo;
        $todo->save();
        return redirect('/todos')->with('success','Todo Created Successfully');
    }
    public function delete($id){
        $todo=Todo::find($id);
        $todo->delete();
        return redirect('/todos')->with('success','Todo Deleted');

    }

    public function edit($id){
        $todo=Todo::find($id);
        return view('update')->with('todo',$todo);
    }

    public function save(Request $request,$id){
        $todo=Todo::find($id);
        $todo->todo=$request->todo;
        $todo->save();
        return redirect('/todos')->with('success','Todo Updated Successfully');
    }

    public function complete($id){
        $todo=Todo::find($id);
        $todo->progress=1;
        $todo->save();
        return redirect('/todos')->with('success','Todo Completed');
    }


}
