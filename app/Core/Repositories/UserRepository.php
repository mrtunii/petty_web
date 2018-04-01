<?php

namespace App\Core\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

public class UserRepository {

    public function create(Request $request) {
        $newUser = new User();
        $newUser->firstname = $request->firstname;
        $newUser->lastname = $request->lastname;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->address = $request->address;
    }
}
