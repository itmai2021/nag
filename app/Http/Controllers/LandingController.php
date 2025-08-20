<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use App\Models\Company;
use App\Models\News;
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
            $color = '';
            switch ($item->company->pilar) {
                case 'Manufacture':
                    $color = '#003366';
                    break;
                case 'Automotive Trading':
                    $color = '#C00000';
                    break;
                case 'Finance':
                    $color = '#007F5C';
                    break;
                case 'Others':
                    $color = '#FF8C42';
                    break;
                default:
                    # code...
                    break;
            }
            ($item->company->pilar);
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
                'color' => $color
            ];
        }

        $lokasi = json_encode($loc);
        $automotive = Company::where('pilar', 'Automotive Trading')->whereNotNull('company_number')->orderBy('company_number', 'ASC')->get();
        $manufacture = Company::where('pilar', 'Manufacture')->whereNotNull('company_number')->orderBy('company_number', 'ASC')->get();
        $finance = Company::where('pilar', 'Finance')->whereNotNull('company_number')->orderBy('company_number', 'ASC')->get();
        $others = Company::where('pilar', 'Others')->whereNotNull('company_number')->orderBy('company_number', 'ASC')->get();
        $data['news'] = News::where('is_highlight', TRUE)->where('is_active', TRUE)->limit(3)->get();
        $tjhmg['atj'] = Company::where('company_shortname', 'ATJ')->first();
        $tjhmg['tjma'] = Company::where('company_shortname', 'TJMA')->first();
        $tjhmg['lgc'] = Company::where('company_shortname', 'LGC')->first();
        $tjhmg['atja'] = Company::where('company_shortname', 'ATJA')->first();

        return view('landing', compact('lokasi', 'automotive', 'manufacture', 'finance', 'others', 'data', 'tjhmg'));
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
