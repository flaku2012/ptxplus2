<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Ticket;

class TicketsController extends Controller
{
     // USUNIĘTO SHOW, EDIT, UPDATE

    public function index()
    {
        $tickets = Ticket::get();
        return view( 'bilety.show' , compact('tickets') ); 
    }

    public function create()
    {
        $categories = Category::get();
        return view( 'bilety.create' , compact('categories') );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|min:5',
            'name' => 'required|min:5',
        ], [
            'required' => 'Musisz wpisać jakąś treść',
            'min' => 'Pole musi mieć minimum :min znaków',
        ]);

        Ticket::create([
            'surname' => $request->surname,
            'name' => $request->name,
            'category_id' => $request->category,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return back();
    }
}
