<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

use App\Category;
use App\room_picture;
use App\room_price;

class FindRoomsClientController extends Controller
{
    public function index(Request $request)
    {
        
        $Category = new Category;
        $Categories = Category::all();

        $room_picture = new Room_picture;
        $room_pictures = Room_picture::all();
        // Reste de determiner les prix en vigeur
        $room_price = new room_price;
        $room_prices = room_price::all();
        
        
        if (!Gate::allows('find_room_access')) {
            return abort(401);
        }
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        $rooms = null;
        if ($request->isMethod('POST')) {
            $rooms = Room::with('booking')
            ->whereHas('booking', function ($q) use ($time_from, $time_to) {
                $q->where(function ($q2) use ($time_from, $time_to) {
                    $q2->where('time_from', '>=', $time_to)
                       ->orWhere('time_to', '<=', $time_from);
                });
            })->orWhereDoesntHave('booking')
            ->where('category_id', $request->input('cat'))->get();
        } else {
            $rooms = null;
        }
        return view('client.disponibilite', compact('rooms', 'time_from', 'time_to'))
        ->with('room_pictures',$room_pictures)
        ->with('room_prices',$room_prices)
        ->with('Categories',$Categories);
        
        
        ;
    }
}
