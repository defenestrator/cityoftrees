<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImageSeeder::class);
        $this->call(ShipmentSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(PaymentMethodTypeSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(ShippingAddressSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
    }
}