<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Http\Controllers\Controller;
use EloquentORM\Http\Requests;
use EloquentORM\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function getAll()
    {
    	$users = User::all();
    	return view('query.all', compact('users'));
    }
}
