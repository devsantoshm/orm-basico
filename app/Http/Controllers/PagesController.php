<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Http\Controllers\Controller;
use EloquentORM\Http\Requests;
use EloquentORM\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$users = User::orderBy('id', 'DESC')
    				->take(10)
    				->get();
    	return view('pages.home', compact('users'));
    }
}
