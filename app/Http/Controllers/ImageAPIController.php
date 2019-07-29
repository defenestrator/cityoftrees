<?php

namespace Cot\Http\Controllers;

use Cot\Image;
use Cot\Http\Resources\ImageCollection;
use Cot\Http\Resources\ImageResource;
 
class ImageAPIController extends Controller
{
    public function index()
    {
        return new ImageCollection(Image::paginate());
    }
 
    public function show(Image $image)
    {
        return new ImageResource($image->load([]));
    }

    public function store(Request $request)
    {
        return new ImageResource(Image::create($request->all()));
    }

    public function update(Request $request, Image $image)
    {
        $image->update($request->all());

        return new ImageResource($image);
    }

    public function destroy(Request $request, Image $image)
    {
        $image->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
