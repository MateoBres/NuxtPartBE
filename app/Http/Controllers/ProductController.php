<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('created_at', 'desc')->get();
        $items = Product::all();

        return Inertia::render('Products', [
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
            "name.it" => 'required',
            "description.it" => 'required',
            "image_id" => 'required'
        ]);

        $product = new Product();
        $product->setTranslation('name', 'it', $request->name['it']);
        $product->setTranslation('name', 'en', $request->name['en']??'');
        $product->setTranslation('name', 'fr', $request->name['fr']??'');

        $product->setTranslation('description', 'it', $request->description['it']);
        $product->setTranslation('description', 'en', $request->description['en']??'');
        $product->setTranslation('description', 'fr', $request->description['fr']??'');

        $product->slug = Str::slug($request->name['it'], '-');

        $product->media_id = $request->image_id;

        $product->save();

        return Redirect::route('products.index')->with('successMessage', 'Prodotti caricati correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $items = Product::orderBy('created_at', 'desc')->get();
        $media = Media::orderBy('created_at', 'desc')->get();
        $product->media;
        return Inertia::render('Products', [
            'product' => $product,
            'items' => $items,
            'media' => $media
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if(!isset($request->name['it'])) {$request->validate(['name.it' => 'required']);}
        if(!isset($request->description['it'])) {$request->validate(['description.it' => 'required']);}

        $product->setTranslation('name', 'it', $request->name['it']);
        $product->setTranslation('name', 'en', $request->name['en']??'');
        $product->setTranslation('name', 'fr', $request->name['fr']??'');

        $product->setTranslation('description', 'it', $request->description['it']);
        $product->setTranslation('description', 'en', $request->description['en']??'');
        $product->setTranslation('description', 'fr', $request->description['fr']??'');

        $product->slug = Str::slug($request->name['it'], '-');

        $product->media_id = $request->image_id ?? $product->media_id;

        $product->save();


        return Redirect::route('products.index')->with('successMessage', 'Prodotto modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return Redirect::route('products.index')->with('successMessage', 'Prodotto eliminato correttamente');
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
            $items = Product::orderBy('created_at', 'desc')->get();
            $data = [];
            foreach($items as $item){
                $item->media;
                $temp = [
                    'id' => $item->id,
                    'name' => $item->getTranslation('name', $locale),
                    'imageUrl' => $item->media->url,
                    'description' => $item->getTranslation('description', $locale)
                ];
                array_push($data, $temp);
            }
                       
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

     /**
     * Fetch all data filtered by language.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchOne(Request $request, Product $product)
    {
        $locale = $request->query('language');
        isset($locale)??$locale="it"; //default
        try {
            $product->media;
            $data= [
                'id' => $product->id,
                'name' => $product->getTranslation('name', $locale),
                'imageUrl' => $product->media->url,
                'description' => $product->getTranslation('description', $locale)
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
