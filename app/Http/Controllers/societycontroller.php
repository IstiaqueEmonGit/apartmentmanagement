<?php

namespace App\Http\Controllers;

use App\Models\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class societycontroller extends Controller
{
    public function addsociety()
    {
        return view('addsociety');
    }

    public function store(Request $request)
    {
        $request->validate([
            'society_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255',],
            'number_of_apartments' => ['nullable', 'integer'],

        ]);

        $societies = Society::insert([
            'society_name' => $request->society_name,
            'address' => $request->address,
            'number_of_apartments' => $request->number_of_apartments
        ]);
        return redirect('society');
    }

    public function viewsociety()
    {
        $societies = Society::orderby('id','ASC')
        ->paginate(10);

        return view('society', compact('societies'));
    }
    public function edit($id)
    {
        $society= Society::FindOrFail($id);
        return view('editsociety', compact('society'));
    }

    public function update(Request $request, $id)
    {
        // $input = $request->all();
        // $society = Society::FindOrFail($id);
        // $society->society_name= $input['society_name'];
        // $society->address= $input['address'];
        // $society->number_of_apartments= $input['number_of_apartments'];

        $society = Society::FindOrFail($id)->update([
            'society_name' => $request->society_name,
            'address' => $request->address,
            'number_of_apartments' => $request->number_of_apartments
        ]);

        return redirect('society');
    }

    public function delete($id)
    {
        Society::FindOrFail($id)->delete();
        return redirect('society');
    }


}
