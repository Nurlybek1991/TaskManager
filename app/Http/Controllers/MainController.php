<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function userInfo()
    {
        $user = Auth::user();

        return view('main', compact('user'));
    }

    public function editTask()
    {
        $tasks = Task::all();

        return view('task', compact('tasks'));

    }

    public function createTask(Request $request)
    {

        $tasks = Task::create([
            'title' => $request->input('title'),
            'board_id' => $request->input('board_id')
        ]);

        return redirect()->route('editTask');
    }
}
