<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use App\Models\Company;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class BusinessUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['business_units'] = BusinessUnit::with('company')->get();
        $data['companys'] = Company::get();

        return view('admin.business_unit', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'company_id'    => 'required',
            'branch_name'     => 'required|string|max:100',
            'address'         => 'required|string',
            'link_maps'         => 'required|string',
            'location_point'  => 'required|string', // format: "lat,lng"
            'is_active'       => 'required|in:1,0',
        ]);

        // Simpan ke database
        BusinessUnit::create([
            'id'              => Str::uuid(),
            'company_id'      => $validated['company_id'],
            'branch_name'     => $validated['branch_name'],
            'address'         => $validated['address'],
            'link_maps'       => $validated['link_maps'],
            'location_point'  => $validated['location_point'],
            'is_active'       => $validated['is_active'],
            'created_at'      => now(),
            'updated_at'      => now(),
            'created_by'      => NULL,
            'updated_by'      => NULL,
        ]);

        // Redirect atau response
        Alert::success('Success', 'Add Business Unit Successfully.');
        return redirect()->route('business_unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company_id'     => 'required',
            'branch_name'    => 'required|string|max:100',
            'address'        => 'required|string',
            'link_maps'      => 'required|string',
            'location_point' => 'required|string',
            'is_active'      => 'required|boolean',
        ]);

        $businessUnit = BusinessUnit::findOrFail($id);

        $businessUnit->company_id     = $request->company_id;
        $businessUnit->branch_name    = $request->branch_name;
        $businessUnit->address        = $request->address;
        $businessUnit->link_maps        = $request->link_maps;
        $businessUnit->location_point = $request->location_point;
        $businessUnit->is_active      = $request->is_active;

        $businessUnit->save();

        Alert::success('Success', 'Update Business Unit Successfully.');
        return redirect()->route('business_unit.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
