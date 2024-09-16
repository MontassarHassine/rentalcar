<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\VehiclesDataTable;
use App\Models\Vehicles;
use Illuminate\Support\Facades\DB;


class VehiclesController extends Controller
{
    //
    public function index(VehiclesDataTable $dataTable)
    {
        return $dataTable->render('vehicles.index');
    }


    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'energy' => 'required|string',
            'availability' => 'nullable|string',
        ]);

        $vehicle = Vehicles::create($data + [
                'availability' => $request->has('availability')
            ]);


//        $querry = DB::table('vehicles')->insert([
//            'brand' => $request->input('brand'),
//            'model' => $request->input('model'),
//            'availability' => $request->has('availability'),
//            'energy' => $request->input('energy'),
//            'created_at' => now(),
//            'updated_at' => now()
//        ]);
        return redirect()->route('vehicles.index');
    }


}
