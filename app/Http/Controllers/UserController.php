<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:read,App\Models\User', ['only' => ['index', 'show']]);
        $this->middleware('can:view,user', ['only' => ['show']]);
        $this->middleware('can:create,App\Models\User', ['only' => ['create', 'store']]);
        $this->middleware('can:update,user', ['only' => ['edit', 'update']]);
        $this->middleware('can:delete,user', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
    }
}
