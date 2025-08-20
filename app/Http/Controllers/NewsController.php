<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::with('company')->get();
        $data['companys'] = Company::get();

        return view('admin.news', compact('data'));
    }

    public function news()
    {
        $data['news'] = News::with('company')
            ->where('is_active', TRUE)
            ->orderBy('publication_date', 'desc')
            ->paginate(9);
        return view('news', compact('data'));
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
        // Ambil semua input
        $data = $request->all();

        // Set UUID
        $data['id'] = (string) Str::uuid();

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            // Pastikan folder ada
            if (!file_exists(public_path('assets/file/news'))) {
                mkdir(public_path('assets/file/news'), 0777, true);
            }

            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('assets/file/news'), $imageName);

            $data['image'] = $imageName; // simpan path relatif
        }


        // Simpan ke database
        News::create($data);

        // Notifikasi sukses
        Alert::success('Success', 'Add News Successfully.');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news, $id)
    {
        $data['newsdetail'] = News::where('id', $id)->first();
        $data['othersnews'] = News::where('id', '!=', $id)->orderBy('publication_date', 'desc')->limit(4)->get();

        return view('news_detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        // Ambil semua data request kecuali image (supaya tidak overwrite null)
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Pastikan folder ada
            $folder = public_path('assets/file/news');
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            // Hapus file lama kalau ada
            if ($news->image && file_exists($folder . '/' . $news->image)) {
                unlink($folder . '/' . $news->image);
            }

            // Simpan file baru
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($folder, $imageName);

            $data['image'] = $imageName;
        }

        $news->update($data);
        Alert::success('Success', 'Update News Successfully.');
        return redirect()->route('news.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

            $url = asset('uploads/' . $filename);

            return response()->json([
                'url' => $url
            ]);
        }
    }
}
