<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ConnectionController
{
   
    public function logout() {
        auth()->logout();
        return redirect("/");
    }
   
    public function connection(Request $request) {

        $incomingFileds = $request->validate([
            "username" =>  ["required"],
            "password"=> ["required"]
        ]);

        $incomingFileds['password'] = bcrypt($incomingFileds['password']);
        
        $user = User::create($incomingFileds);

        auth()->login($user);


        return redirect("/tasks");
    }
    
    public function register(Request $request) {

        $incomingFileds = $request->validate([
            "username" =>  ["required"],
            "password"=> ["required"]
        ]);

        $incomingFileds['password'] = bcrypt($incomingFileds['password']);
        
        User::create($incomingFileds);

        return redirect("/connection");
    }
    
}
