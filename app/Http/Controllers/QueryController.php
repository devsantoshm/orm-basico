<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Http\Controllers\Controller;
use EloquentORM\Http\Requests;
use EloquentORM\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function eloquentAll()
    {
    	$users = User::all();
        $title = 'Todos los usuarios (All)';
    	return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGet($gender)
    {
    	$users = User::where('gender', $gender)
    				->get();
    	$title = 'Lista de usuarios (Get)';
        return view('query.methods', compact('title', 'users'));
    }
}
