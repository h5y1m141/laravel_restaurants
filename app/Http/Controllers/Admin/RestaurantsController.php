<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')
                     ->simplePaginate(5);
        return view('admin.restaurants.index', ['restaurants' => $restaurants]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = new Restaurant;
        return view('admin.restaurants.create', ['restaurant' => $restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        if ($request->picture_filename)
        {
            $restaurant->picture_filename = $this->store_picture($request->picture_filename);
        }
        $restaurant->save();
        return redirect('/admin/restaurants');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        if ($request->picture_filename)
        {
            $restaurant->picture_filename = $this->store_picture($request->picture_filename);
        }
        $restaurant->save();
        return redirect('/admin/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return redirect('/admin/restaurants');
    }
    private function store_picture($file_name)
    {
        $file = $file_name;
        $name = $file->getClientOriginalName();
        $file->move('./storage/', $name);
        return $name;
    }
}
