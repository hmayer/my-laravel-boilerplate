<?php

namespace User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use User\Models\User;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user::index', [
            'users' => User::all()
        ]);
    }
}
