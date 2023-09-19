<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterawal;
use App\Models\Master;

class DashboardController extends Controller
{
    public function index()
    {
        $groups = Master::groupBy('masterawal_id')
            ->selectRaw('count(*) as total, masterawal_id')
            ->get();

        $tot_merek = Master::groupBy('merek')
            ->selectRaw('count(*) as total, merek')
            ->get();

        $background_colors = [
            '#282E33',
            '#25373A',
            '#164852',
            '#495E67',
            '#FF3838',
            'red',
            'silver',
            'gold',
            'yellow',
        ];

        $rand_background = $background_colors[array_rand($background_colors)];

        // $hasil[] = ['ULP', 'Banyak Trafo', '{ role: "style"}'];
        // foreach ($tot_merek as $key => $val) {
        //     $hasil[++$key] = [$val->merek, (int) $val->total, $rand_background];
        // }
        //ground

        $posts = Master::with('masterawal')->get();
        // dd($groups);

        $result[] = ['ULP', 'Banyak Trafo'];
        foreach ($groups as $key => $value) {
            $result[++$key] = [$value->Masterawal->ulp, (int) $value->total];
        }

        // dd($result);

        return view('dashboard')
            ->with('groups', json_encode($result))
            ->with('tot_merek', $tot_merek);
    }
}