<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class flatcontroller extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'apartment_no'=> ['required', 'integer'],
            'flat_no'=> ['required', 'string','max:255'],
            'owner_name' => ['required', 'string','max:255'],
            'tenant_name' => ['nullable', 'string','max:255'],
            'service_charge' => ['required', 'integer']
        ]);

        Flat::insert([
            'apartment_no'=> $request->apartment_no,
            'flat_no'=> $request->flat_no,
            'owner_name' => $request->owner_name,
            'tenant_name' => $request->tenant_name,
            'service_charge' => $request->service_charge,
        ]);
        return redirect('flat');
    }

    public function addflat()
    {
        return view('addflat');
    }
    public function viewflat()
    {
        $flats = Flat::orderby('id','ASC')->paginate(10);

        return view('flat', compact('flats'));
    }

    public function edit($id)
    {
        $flat= Flat::FindOrFail($id);
        return view('editflat', compact('flat'));
    }

    public function update(Request $request, $id)
    {
        Flat::FindOrFail($id)->update([
            'apartment_no'=> $request->apartment_no,
            'flat_no'=> $request->flat_no,
            'owner_name' => $request->owner_name,
            'tenant_name' => $request->tenant_name,
            'service_charge' => $request->service_charge,
        ]);
        return redirect('flat');
    }

    public function delete($id)
    {
        Flat::FindOrFail($id)->delete();
        return redirect('flat');
    }
}
