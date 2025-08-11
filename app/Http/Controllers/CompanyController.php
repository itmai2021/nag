<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['companies'] = Company::get();

        return view('admin.company', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_shortname' => 'nullable|string|max:255',
            'pilar' => 'required|string|max:255',
            'web_url' => 'nullable|url',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'building_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        // Upload file jika ada
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        $buildingPhotoPath = null;
        if ($request->hasFile('building_photo')) {
            $buildingPhotoPath = $request->file('building_photo')->store('buildings', 'public');
        }

        // Simpan data
        $model                      = new Company(); // ganti `Company` sesuai model yang kamu pakai
        $model->id                  = Str::uuid();
        $model->company_name        = $request->company_name;
        $model->company_shortname   = $request->company_shortname;
        $model->pilar               = $request->pilar;
        $model->web_url             = $request->web_url;
        $model->description                = $request->description;
        $model->is_active           = $request->is_active;
        $model->logo                = $logoPath;
        $model->building_photo      = $buildingPhotoPath;
        $model->created_by          = auth()->user()->id ?? null; // pastikan pakai auth
        $model->updated_by          = auth()->user()->id ?? null;
        $model->save();

        Alert::success('Success', 'Add Company Successfully.');
        return redirect()->route('company.index');
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
        $company = Company::findOrFail($id);

        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_shortname' => 'required|string|max:255',
            'pilar' => 'nullable|string|max:255',
            'web_url' => 'nullable|url|max:255',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'building_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        // Update data
        $company->company_name = $request->company_name;
        $company->company_shortname = $request->company_shortname;
        $company->pilar = $request->pilar;
        $company->web_url = $request->web_url;
        $company->description = $request->description;
        $company->is_active = $request->is_active;

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Optional: hapus file lama jika ada
            if ($company->logo && file_exists(public_path('storage/logo/' . $company->logo))) {
                unlink(public_path('storage/logo/' . $company->logo));
            }

            $logoName = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('storage/logo'), $logoName);
            $company->logo = $logoName;
        }

        // Handle building photo upload
        if ($request->hasFile('building_photo')) {
            if ($company->building_photo && file_exists(public_path('storage/buildings/' . $company->building_photo))) {
                unlink(public_path('storage/buildings/' . $company->building_photo));
            }

            $photoName = time() . '_building.' . $request->building_photo->extension();
            $request->building_photo->move(public_path('storage/buildings'), $photoName);
            $company->building_photo = $photoName;
        }

        $company->save();

        Alert::success('Success', 'Update Company Successfully.');
        return redirect()->route('company.index');
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
