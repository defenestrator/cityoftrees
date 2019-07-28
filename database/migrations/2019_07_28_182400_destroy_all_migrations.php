<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DestroyAllMigrations extends Migration
{
    /**
     * Run the migrations.
     * THE ORDER MATTERS DO NOT ALTER UNLESS YOU KNOW WHY
     *
     * @return void
     */
    public function up()
    {
        // THE ORDER MATTERS DO NOT ALTER UNLESS YOU KNOW WHY
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('imageable_id')->nullable();
            $table->string('imageable_type')->nullable();
            $table->string('large');
            $table->string('medium');
            $table->string('small');
            $table->string('square');
            $table->string('original');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('ship_to_name');
            $table->string('country');
            $table->string('street_address');
            $table->string('unit_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('country')->nullable();
            $table->string('street_address')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('country')->nullable();
            $table->string('street_address')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->string('screen_name')->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('thcfarmer')->nullable();
            $table->string('rollitup')->nullable();
            $table->string('four20mag')->nullable();
            $table->string('leafly')->nullable();
            $table->string('strainly')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('payment_method_types', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->string('name')->unique();
            $table->string('receiving_account');
            $table->boolean('active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('depth')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('volume')->nullable();
            $table->unsignedInteger('contents')->nullable();
            $table->unsignedInteger('price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->boolean('percentage')->nullable();
            $table->unsignedInteger('value');
            $table->string('code')->index()->unique();
            $table->timestamp('expires')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('subtotal');
            $table->unsignedInteger('tax')->nullable();
            $table->unsignedInteger('shipping')->nullable();
            $table->unsignedInteger('discount')->nullable();
            $table->unsignedInteger('total');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('shipping_address_id')->nullable();
            $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses');
            $table->string('frequency');
            $table->boolean('active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('payment_method_type_id');
            $table->foreign('payment_method_type_id')->references('id')->on('payment_method_types');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nickname')->nullable();
            $table->string('account')->nullable();
            $table->timestamp('expires')->nullable();
            $table->string('secret')->nullable();
            $table->string('postcode')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->unsignedInteger('amount');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('shipping_method_id');
            $table->timestamp('shipped_on_date')->nullable();
            $table->timestamp('received_on_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // Pivot Tables

        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('product_subscription', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->unsignedInteger('qty');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('invoice_product', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('qty');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('invoice_subscription', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('coupon_user', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('invoice_payment', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('order_shipment', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('shipment_id')->nullable();
            $table->foreign('shipment_id')->references('id')->on('shipments');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('cart_product', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('qty');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    protected $tables = [
        // THE ORDER MATTERS DO NOT ALTER UNLESS YOU KNOW WHY
        'users',
        'password_resets',
        'roles',
        'images',
        'shipping_addresses',
        'manufacturers',
        'vendors',
        'profiles',
        'payment_method_types',
        'products',
        'carts',
        'coupons',
        'invoices',
        'subscriptions',
        'payment_methods',
        'payments',
        'orders',
        'shipments',
        // pivot tables
        'role_user',
        'product_subscription',
        'invoice_product',
        'invoice_subscription',
        'coupon_user',
        'invoice_payment',
        'order_shipment',
        'cart_product'
    ];
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach ($tables as $table) {
            Schema::dropIfExists($table);
        }
    }
}
