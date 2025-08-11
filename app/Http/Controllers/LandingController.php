<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use App\Models\Company;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // $loc = [
        //     ['label' => 'PT MAI (Holding Company)', 'lat' => -6.175584229496133, 'lng' => 106.8100069066888],
        //     ['label' => 'PT Bumen Redja Abadi (Head Office)', 'lat' =>  -6.2284, 'lng' => 106.8476],
        //     ['label' => 'PT Armada Autotara (Head Office', 'lat' => -6.1958, 'lng' => 106.7692],
        // ];
        $locs = BusinessUnit::with('company')->get();
        $loc = [];

        foreach ($locs as $item) {
            // Pisahkan location_point menjadi lat dan lng
            [$lat, $lng] = explode(',', $item->location_point);

            // Trim dan konversi ke float
            $lat = (float) trim($lat);
            $lng = (float) trim($lng);

            // Tambahkan ke array $loc
            $loc[] = [
                'label' => $item->company->company_name . ' (' . $item->branch_name . ')',
                'lat' => $lat,
                'lng' => $lng,
                'link' => $item->link_maps,
            ];
        }

        $lokasi = json_encode($loc);
        $automotive = Company::where('pilar', 'Automotive Trading')->get();
        $manufacture = Company::where('pilar', 'Manufacture')->get();
        $finance = Company::where('pilar', 'Finance')->get();
        $others = Company::where('pilar', 'Others')->get();

        return view('landing', compact('lokasi', 'automotive', 'manufacture', 'finance', 'others'));
    }

    public function news()
    {
        return view('news');
    }
    public function news_detail()
    {
        return view('news_detail');
    }
    public function about_us()
    {
        return view('about_us');
    }
}
