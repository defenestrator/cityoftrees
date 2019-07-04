<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Http\Resources\CouponCollection;
use App\Http\Resources\CouponResource;
 
class CouponAPIController extends Controller
{
    public function index()
    {
        return new CouponCollection(Coupon::paginate());
    }
 
    public function show(Coupon $coupon)
    {
        return new CouponResource($coupon->load(['users']));
    }

    public function store(Request $request)
    {
        return new CouponResource(Coupon::create($request->all()));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update($request->all());

        return new CouponResource($coupon);
    }

    public function destroy(Request $request, Coupon $coupon)
    {
        $coupon->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
