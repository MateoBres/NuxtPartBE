<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::with([
            'products', 'events', 'projects', 'media'
            ])->orderBy('name', 'asc')->get();

        return Inertia::render('Districts', [
            'items' => $districts
        ]);
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
        $request->validate([
        'name' => 'required'
        ]);

        try {
            $district = new District;
            $district->name = $request->input('name');
            $district->description = $request->input('description');
            $district->slug = $this->slugify($request->input('name'));
            $district->save();
            return response()->json([
                'success' => true,
                'message' => getenv('MSG_SUCCESS'),
                'data' => $district
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => getenv('MSG_ERROR'),
                'data' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        $name = ($request->get('name')) ? ($request->get('name')) : ($district->name);
        $description = ($request->get('description')) ? ($request->get('description')) : ($district->description);

        try {
            $district->name = $name;
            $district->description = $description;
            $district->slug = $this->slugify($name);
            $district->save();

            return response()->json([
                'success' => true,
                'message' => 'District information successfully updated',
                'data' => $district
            ], 200);
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json([
                'success' => false,
                'message' => getenv('MSG_ERROR'),
                'data' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        try {
            $district->delete();

            return response()->json([
                'success' => true,
                'message' => 'District successfully deleted',
                'data' => $district
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => getenv('MSG_ERROR'),
                'data' => $th->getMessage()
            ], 500);
        }
    }
}
