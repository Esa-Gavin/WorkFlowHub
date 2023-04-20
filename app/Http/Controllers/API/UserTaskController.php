<?php

namespace App\Http\Controllers\API;

use App\Models\UserTask;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTasks = UserTask::with(['user', 'task', 'status'])->get();
        return response()->json(['userTasks' => $userTasks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
            'due_date' => 'required|date',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'remarks' => 'max:100',
            'status_id' => 'required|exists:statuses,id',
        ]);

        $userTask = UserTask::create($validated);
        return response()->json(['userTask' => $userTask], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserTask $userTask)
    {
        return response()->json(['userTask' => $userTask->load(['user', 'task', 'status'])]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTask $userTask)
    {
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'task_id' => 'exists:tasks,id',
            'due_date' => 'date',
            'start_time' => 'date',
            'end_time' => 'date',
            'remarks' => 'max:100',
            'status_id' => 'exists:statuses,id',
        ]);

        $userTask->update($validated);
        return response()->json(['userTask' => $userTask]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTask $userTask)
    {
        $userTask->delete();
        return response()->json(['message' => 'User task deleted']);
    }
}
