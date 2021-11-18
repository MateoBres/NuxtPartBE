<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Media;
use Illuminate\Support\Facades\Redirect;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('created_at', 'desc')->get();
        $items = Info::all();

        return Inertia::render('Infos', [
            'media' => $media,
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
            "title.it" => 'required',
            "subtitle.it" => 'required',
            "terms.it"  => 'required',
            "privacy.it"  => 'required',
            "cook.it"  => 'required',
            "bgimage_id" => 'required',
            "contact.name"  => 'required',
            "contact.address"  => 'required',
            "contact.phone"  => 'required',
            "contact.vat"  => 'required',
            "contact.email"  => 'required',
        ]);

        $info = new Info();
        $info->setTranslation('title', 'it', $request->title['it']);
        $info->setTranslation('title', 'en', $request->title['en']??'');
        $info->setTranslation('title', 'fr', $request->title['fr']??'');

        $info->setTranslation('subtitle', 'it', $request->subtitle['it']);
        $info->setTranslation('subtitle', 'en', $request->subtitle['en']??'');
        $info->setTranslation('subtitle', 'fr', $request->subtitle['fr']??'');

        $info->setTranslation('terms', 'it', $request->terms['it']);
        $info->setTranslation('terms', 'en', $request->terms['en']??'');
        $info->setTranslation('terms', 'fr', $request->terms['fr']??'');

        $info->setTranslation('privacy', 'it', $request->privacy['it']);
        $info->setTranslation('privacy', 'en', $request->privacy['en']??'');
        $info->setTranslation('privacy', 'fr', $request->privacy['fr']??'');

        $info->setTranslation('cookies', 'it', $request->cook['it']);
        $info->setTranslation('cookies', 'en', $request->cook['en']??'');
        $info->setTranslation('cookies', 'fr', $request->cook['fr']??'');

        $info->contact = json_encode($request->contact);
        $info->bgimage_id = $request->bgimage_id;

        $info->save();

        return Redirect::route('infos.index')->with('successMessage', 'Contenuti caricati correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        $items = Info::orderBy('created_at', 'desc')->get();
        $media = Media::orderBy('created_at', 'desc')->get();
        return Inertia::render('Infos', [
            'info' => $info,
            'items' => $items,
            'media' => $media
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        if(!isset($request->title['it'])) {$request->validate(['title.it' => 'required']);}
        if(!isset($request->subtitle['it'])) {$request->validate(['subtitle.it' => 'required']);}
        if(!isset($request->terms['it'])) {$request->validate(['terms.it' => 'required']);}
        if(!isset($request->privacy['it'])) {$request->validate(['privacy.it' => 'required']);}
        if(!isset($request->bgimage_id)) {$request->validate(['bgimage_id' => 'required']);}
        if(!isset($request->contact['name'])) {$request->validate(['contact.name' => 'required']);}
        if(!isset($request->contact['address'])) {$request->validate(['contact.address' => 'required']);}
        if(!isset($request->contact['phone'])) {$request->validate(['contact.phone' => 'required']);}
        if(!isset($request->contact['vat'])) {$request->validate(['contact.vat' => 'required']);}
        if(!isset($request->contact['email'])) {$request->validate(['contact.email' => 'required']);}


        $info->setTranslation('title', 'it', $request->title['it']);
        $info->setTranslation('title', 'en', $request->title['en']??'');
        $info->setTranslation('title', 'fr', $request->title['fr']??'');

        $info->setTranslation('subtitle', 'it', $request->subtitle['it']);
        $info->setTranslation('subtitle', 'en', $request->subtitle['en']??'');
        $info->setTranslation('subtitle', 'fr', $request->subtitle['fr']??'');

        $info->setTranslation('terms', 'it', $request->terms['it']);
        $info->setTranslation('terms', 'en', $request->terms['en']??'');
        $info->setTranslation('terms', 'fr', $request->terms['fr']??'');

        $info->setTranslation('privacy', 'it', $request->privacy['it']);
        $info->setTranslation('privacy', 'en', $request->privacy['en']??'');
        $info->setTranslation('privacy', 'fr', $request->privacy['fr']??'');

        $info->setTranslation('cookies', 'it', $request->cook['it']);
        $info->setTranslation('cookies', 'en', $request->cook['en']??'');
        $info->setTranslation('cookies', 'fr', $request->cook['fr']??'');

        $info->contact = json_encode($request->contact);
        $info->bgimage_id = $request->bgimage_id;

        $info->save();


        return Redirect::route('infos.index')->with('successMessage', 'Informazioni modificate correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete();

        return Redirect::route('infos.index')->with('successMessage', 'Contenuti eliminati correttamente');
    }


    /**
     * Fetch all data filtered by language.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        $locale = $request->query('language');
        isset($locale)??$locale="it"; //default
        try {
            $item = Info::first();
            $item->bgimage;
            $data = [
                'title' => $item->getTranslation('title', $locale),
                'bgimageUrl' => $item->bgimage->url,
                'subtitle' => $item->getTranslation('subtitle', $locale),
                'bgimageAlt' => $item->bgimage->getTranslation('alt', $locale),
                'terms' => $item->getTranslation('terms', $locale),
                'privacy' => $item->getTranslation('privacy', $locale),
                'cookies' => $item->getTranslation('cookies', $locale),
                'contact' => json_decode($item->contact)
            ];
            return response()->json([
                'success' => true,
                'message' => getenv('MSG_SUCCESS'),
                'data' => $data
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
