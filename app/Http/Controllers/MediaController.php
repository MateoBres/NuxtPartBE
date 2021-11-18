<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Media::orderBy('created_at', 'desc')->get();

        return Inertia::render('Media', [
            'items' => $items
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
                'file' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                "name" => 'required',
                "alt.it" => 'required',
            ]);
            $ext = substr(request('file')->getClientOriginalName(), strrpos(request('file')->getClientOriginalName(), ".") + 1);
            $nameImage = rand(10000000, 99999999);
            $url = 'storage/uploads/'.$nameImage.'.'.$ext;
            request('file')->storeAs('public/uploads', $nameImage.'.'.$ext);

            $media = new Media();
            $media->name = $request->name;
            $media->setTranslation('alt', 'it', $request->alt['it']);
            $media->setTranslation('alt', 'en', $request->alt['en']??'');
            $media->setTranslation('alt', 'fr', $request->alt['fr']??'');
            $media->url = $url;
            $media->save();

            return Redirect::route('media.index')->with('successMessage', 'Media caricato correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        // $items = Media::orderBy('created_at', 'desc')->get();
        // return Inertia::render('Media', [
        //     'media' => $media,
        //     'items' => $items
        // ]);
        // try {
        //     return response()->json([
        //         'success' => true,
        //         'message' => getenv('MSG_SUCCESS'),
        //         'data' => $media->url
        //     ], 200);
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => getenv('MSG_ERROR'),
        //         'data' => $th->getMessage()
        //     ], 404);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $items = Media::orderBy('created_at', 'desc')->get();
        return Inertia::render('Media', [
            'media' => $media,
            'items' => $items
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $request->validate(['name' => 'required']);
        if(!isset($request->alt['it'])) {$request->validate(['alt.it' => 'required']);}

        if($request->hasFile('file')){
            $request->validate(['file' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',]);
            $ext = substr(request('file')->getClientOriginalName(), strrpos(request('file')->getClientOriginalName(), ".") + 1);
            $nameImage = rand(10000000, 99999999);
            $url = 'storage/uploads/'.$nameImage.'.'.$ext;
            request('file')->storeAs('public/uploads', $nameImage.'.'.$ext);
        }

        $media->name = $request->name;
        $media->setTranslation('alt', 'it', $request->alt['it']);
        $media->setTranslation('alt', 'en', $request->alt['en']??'');
        $media->setTranslation('alt', 'fr', $request->alt['fr']??'');
        $media->url = $url ?? $media->url;
        $media->save();


        return Redirect::route('media.index')->with('successMessage', 'Media modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();

        return Redirect::route('media.index')->with('successMessage', 'Media eliminato correttamente');
    }
}
