<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUsController extends Controller
{

    public function index_admin()
    {
        $datas = ContactUs::orderBy('created_at', 'DESC')->get();

        return view('admin.contact_us', compact('datas'));
    }
    public function index()
    {
        return view('contact_us');
    }

    public function store(Request $request)
    {
        // Validasi input
        // $validated = $request->validate([
        //     'name' => 'required|string|max:100',
        //     'email' => 'required|email|max:100',
        //     'message' => 'required|string',
        // ]);

        // Simpan ke database
        ContactUs::create($request->all());

        // Redirect atau respon sukses
        Alert::success('Success', 'Send Message Successfully.');
        return back()->with('success', 'Pesan Anda telah dikirim.');
    }
}
