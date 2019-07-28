<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * THE ORDER MATTERS DO NOT ALTER UNLESS YOU KNOW WHY
     * Seed the application's database.
     *
     *
     * @return void
     */
    public function run()
    {
        // THE ORDER MATTERS DO NOT ALTER UNLESS YOU KNOW WHY
        $this->call(UserSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ShippingAddressSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(PaymentMethodTypeSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ShipmentSeeder::class);
    }
}
