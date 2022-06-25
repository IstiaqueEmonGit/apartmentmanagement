<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class apartmentcontroller extends Controller
{
    public function addapartment()
    {
        return view('addapartment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'society_name' => ['required', 'string', 'max:255'],
            'apartment_name' => ['required', 'string','max:255'],
            'apartment_no'=> ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
            'flats' => ['nullable', 'integer']

        ]);

        $societies = Apartment::insert([
            'society_name' => $request->society_name,
            'apartment_name' => $request->apartment_name,
            'apartment_no'=>$request->apartment_no,
            'address' => $request->address,
            'flats' => $request->flats,
        ]);
        return redirect('apartment');
    }

    public function viewapartment()
    {
        $apartments = Apartment::orderby('id','ASC')->paginate(10);

        return view('apartment', compact('apartments'));
    }

    public function edit($id)
    {
        $apartment= Apartment::FindOrFail($id);
        return view('editapartment', compact('apartment'));
    }

    public function update(Request $request, $id)
    {
        $society = Apartment::FindOrFail($id)->update([
            'society_name' => $request->society_name,
            'apartment_name' => $request->apartment_name,
            'apartment_no'=>$request->apartment_no,
            'address' => $request->address,
            'flats' => $request->flats,
        ]);
        return redirect('apartment');
    }

    public function delete($id)
    {
        Apartment::FindOrFail($id)->delete();
        return redirect('apartment');
    }
}
