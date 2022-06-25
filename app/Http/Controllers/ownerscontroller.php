<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class ownerscontroller extends Controller
{


    public function viewowners()
    {
        $owners = Owner::orderby('id','ASC')->paginate(10);

        return view('owners', compact('owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'flat_no'=> ['required', 'string','max:255'],
            'name' => ['required', 'string','max:255'],
            'nid' => ['required', 'integer'],
            'email' => ['required', 'email'],
            'occupation' => ['required', 'string','max:255']
        ]);

        Owner::insert([
            'flat_no'=> $request->flat_no,
            'name' => $request->name,
            'NID' => $request->nid,
            'email' => $request->email,
            'occupation' => $request->occupation
        ]);

        return redirect('owners');
    }

    public function addowners()
    {
        return view('addowners');
    }


    public function edit($id)
    {
        $owner= Owner::FindOrFail($id);
        return view('editowners', compact('owner'));
    }

    public function update(Request $request, $id)
    {
        Owner::FindOrFail($id)->update([
            'flat_no'=> $request->flat_no,
            'name' => $request->name,
            'NID' => $request->nid,
            'email' => $request->email,
            'occupation' => $request->occupation
        ]);
        return redirect('owners');
    }

    public function delete($id)
    {
        Owner::FindOrFail($id)->delete();
        return redirect('owners');
    }
}
