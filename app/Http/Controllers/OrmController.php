<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\Book;
use EloquentORM\Category;
use EloquentORM\Http\Controllers\Controller;
use EloquentORM\Http\Requests;
use EloquentORM\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OrmController extends Controller
{
    public function ormAll()
    {
        $books = Book::all();
        $title = 'Todos los libros (All)';
        return view('orm.methods', compact('title', 'books'));
    }

    public function ormDelete($id)
    {
        $book = Book::find($id);
        $book->delete();
        $message = $book->title . ' fue enviado a la papelera';
        Session::flash('message', $message);
        return redirect('orm-all');
    }

    public function ormForceDelete($id)
    {
        $book = Book::withTrashed()->find($id);
        $book->forceDelete();
        $message = $book->title . ' fue eliminado definitivamente';
        Session::flash('message', $message);
        return redirect('orm-all');
    }

    public function ormRestore($id)
    {
        $book = Book::withTrashed()->find($id);
        $book->restore();
        $message = $book->title . ' fue recuperado de la papelera';
        Session::flash('message', $message);
        return redirect('orm-all');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids; // '12,14'
        Book::whereIn('id', explode(',', $ids))->delete(); //explode(): Convierte un string en array
        return response()->json(['success' => 'Libros enviados a papelera']);
    }

    public function forceDeleteAll(Request $request)
    {
        $ids = $request->ids; // '12,14'
        Book::withTrashed()->whereIn('id', explode(',', $ids))->forceDelete(); //explode(): Convierte un string en array
        return response()->json(['success' => 'Libros eliminados definitivamente']);
    }

    public function restoreAll(Request $request)
    {
        $ids = $request->ids; // '12,14'
        Book::withTrashed()->whereIn('id', explode(',', $ids))->restore(); //explode(): Convierte un string en array
        return response()->json(['success' => 'Libros recuperados de la papelera']);
    }

    public function ormDestroy(Request $request)
    {
        $ids = $request->get('ids');

        if (count($ids)) {
            Book::destroy($ids);
        }

        $message = count($ids) . ' registros fueron enviados a la papelera';
        Session::flash('message', $message);

        return redirect('orm-all');
    }

     public function ormAllForceDelete(Request $request)
    {
        $ids = $request->get('ids');

        if (count($ids)) {
           for ($i=0; $i < count($ids); $i++) { 
                $book = Book::withTrashed()->find($ids[$i]);
                $book->forceDelete();
           }
        }

        $message = count($ids) . ' registros fueron eliminados definitivamente';
        Session::flash('message', $message);

        return redirect('orm-all');
    }

    public function ormBooksTrashed()
    {
        $books = Book::onlyTrashed()->get();
        $title = 'Libros en papelera (OnlyTrashed)';
        return view('orm.trashed', compact('title', 'books'));
    }

    public function ormhasMany()
    {
        //traer categorias que tienen libros, llamando al metodo books de category
        //$categories = Category::has('books')->get(); 
        //mostrar la lista de categorias que tengan libros publicos
        $categories = Category::whereHas('books', function($query){
            $query->where('status', 'public');
        })->get(); 
        $title = 'Relación 1 a muchos (hasMany)';
        return view('orm.hasmany', compact('title', 'categories'));
    }

    public function ormManyToMany()
    {
        $users = User::all(); 
        $title = 'Relación muchos a muchos';
        return view('orm.manytomany', compact('title', 'users'));
    }

    public function editManyToMany($user_id)
    {
        $user = User::find($user_id);
        $books = Book::orderBy('title', 'ASC')->lists('title', 'id');
        $title = 'Relación';
        return view('orm.edit', compact('user', 'books', 'title'));
    }

    public function putManyToMany(Request $request, $user_id)
    {
        $user = User::find($user_id);
        //$user->manyBooks()->detach();
        //$user->manyBooks()->attach($request->get('books'));
        $user->manyBooks()->sync($request->get('books'));
        return redirect('ormmanytomany');
    }
}
