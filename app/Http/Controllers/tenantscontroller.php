<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class tenantscontroller extends Controller
{
    public function viewtenants()
    {
        $tenants = Tenant::orderby('id','ASC')->paginate(10);

        return view('tenants', compact('tenants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'flat_no'=> ['required', 'string','max:255'],
            'name' => ['required', 'string','max:255'],
            'nid' => ['required', 'integer'],
            'email' => ['required', 'email'],
            'occupation' => ['required', 'string','max:255'],
            'rent' => ['required','integer']
        ]);

        Tenant::insert([
            'flat_no'=> $request->flat_no,
            'name' => $request->name,
            'NID' => $request->nid,
            'email' => $request->email,
            'occupation' => $request->occupation,
            'rent' => $request->rent
        ]);

        return redirect('tenants');
    }

    public function addtenants()
    {
        return view('addtenants');
    }


    public function edit($id)
    {
        $tenant= Tenant::FindOrFail($id);
        return view('edittenants', compact('tenant'));
    }

    public function update(Request $request, $id)
    {
        Tenant::FindOrFail($id)->update([
            'flat_no'=> $request->flat_no,
            'name' => $request->name,
            'NID' => $request->nid,
            'email' => $request->email,
            'occupation' => $request->occupation,
            'rent' => $request->rent
        ]);
        return redirect('tenants');
    }

    public function delete($id)
    {
        Tenant::FindOrFail($id)->delete();
        return redirect('tenants');
    }
}
