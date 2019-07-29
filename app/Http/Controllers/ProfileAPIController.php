<?php

namespace Cot\Http\Controllers;

use Cot\Profile;
use Cot\Http\Resources\ProfileCollection;
use Cot\Http\Resources\ProfileResource;
 
class ProfileAPIController extends Controller
{
    public function index()
    {
        return new ProfileCollection(Profile::paginate());
    }
 
    public function show(Profile $profile)
    {
        return new ProfileResource($profile->load(['user']));
    }

    public function store(Request $request)
    {
        return new ProfileResource(Profile::create($request->all()));
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());

        return new ProfileResource($profile);
    }

    public function destroy(Request $request, Profile $profile)
    {
        $profile->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
