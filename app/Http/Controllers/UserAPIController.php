<?php

namespace Cot\Http\Controllers;

use Cot\User;
use Cot\Http\Resources\UserCollection;
use Cot\Http\Resources\UserResource;
 
class UserAPIController extends Controller
{
    public function index()
    {
        return new UserCollection(User::paginate());
    }
 
    public function show(User $user)
    {
        return new UserResource($user->load(['vendors', 'subscriptions', 'carts', 'invoices', 'shippingAddresses', 'orders', 'paymentMethods', 'roles', 'coupons']));
    }

    public function store(Request $request)
    {
        return new UserResource(User::create($request->all()));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
