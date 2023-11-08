<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    public function index()
    {
        $homes = Task::latest()->get(); // Assuming 'Student' is your Eloquent model for students

        return view('create', [
            'homes' => $homes, // Pass the 'students' variable to the view
        ]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'tittle' => 'required',
            'description' => 'description',

            'complete' => 'required',
       
        ]);
    
        Task::create([
            'id' => $request->id,
            'tittle' => $request->tittle,
            'description' => $request->description,
            'complete' => $request->complete,
           
        ]);
    
        return back()->with('success', 'Data created successfully');
    }
    

    public function edit($id)
    {
        $home = Task::find($id);
        return view('edit', compact('home'));
    }

 



    public function update(Request $request)
    {
        $home = Task::find($request->data_id);

        $home->update([
            'id' => $request->id,
            'tittle' => $request->tittle,
            'description' => $request->description,
        ]);

        return redirect('/')->with('success', 'Update successfully');
    }



    public function destroy(Request $request)
    {
        Task::destroy($request->data_id);

        return back()->with('success', 'Deleted successfully');
    }
}
