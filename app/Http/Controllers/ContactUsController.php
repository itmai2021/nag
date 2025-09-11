<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        // Simpan ke database
        ContactUs::create($request->all());

        // Kirim email
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ];

        Mail::to('secretariat@mai.nag.co.id')->send(new ContactUsMail($data));
        // Mail::to('deniardiyansyah050@gmail.com')->send(new ContactUsMail($data));

        // Redirect atau respon sukses
        Alert::success('Success', 'Send Message Successfully.');
        return back()->with('success', 'Pesan Anda telah dikirim.');
    }
}
