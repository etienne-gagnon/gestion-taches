<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class tasksController
{


    public function delete(Task $task){
        $task->delete();
        return redirect('/tasks');
    }



    public function update(Task $task, Request $request){
        
        $incomingFileds = $request->validate([
            "title" =>  ["required"],
            "description"=> ["required"],
            "priority"=> ["required"],
            "due_date"=> ["date"]
        ]);
        
        $incomingFileds["title"] = strip_tags($incomingFileds["title"]);
        $incomingFileds["description"] = strip_tags($incomingFileds["description"]);
        $incomingFileds["priority"] = strip_tags($incomingFileds["priority"]);
        $incomingFileds["due_date"] = strip_tags($incomingFileds["due_date"]);
        $incomingFileds["user_id"] = auth()->id();

        $task->update($incomingFileds);

        return redirect('/tasks');
    }


    public function showEditForm(Task $task){

        return view("/tasks/edit", ["task" => $task]);
    }


    public function create(Request $request) {

        $incomingFileds = $request->validate([
            "title" =>  ["required"],
            "description"=> ["required"],
            "priority"=> ["required"],
            "due_date"=> ["date"]
            
        ]);
        
        $incomingFileds["title"] = strip_tags($incomingFileds["title"]);
        $incomingFileds["description"] = strip_tags($incomingFileds["description"]);
        $incomingFileds["priority"] = strip_tags($incomingFileds["priority"]);
        $incomingFileds["due_date"] = strip_tags($incomingFileds["due_date"]);
        $incomingFileds["user_id"] = auth()->id();

        Task::create($incomingFileds);

        return redirect("/tasks");
    }


}
