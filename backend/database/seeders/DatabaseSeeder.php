<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('orders')->truncate();
        DB::table('customers')->truncate();
        DB::table('users')->truncate();
        DB::table('products')->truncate();
        DB::table('categories')->truncate();
        DB::table('category_product')->truncate();

        $userAdmin = User::create([
            'name' => env('DATABASE_ADMIN'),
            'email' => env('DATABASE_EMAIL'),
            'password' => Hash::make(env('DATABASE_PASS')),
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);

        $userCustomers = User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }

        $productSabor = Product::factory(10)
        ->create();

        $categorySabor = Category::create([
            'name' => "Sabor"
        ]);

        foreach ($productSabor as $productSabor) {
            $productSabor->categories()->attach($categorySabor->id);
        }

        $productVaper = Product::factory(10)
        ->create();

        $categoryVaper = Category::create([
            'name' => "Vaper"
        ]);

        foreach ($productVaper as $productVaper) {
            $productVaper->categories()->attach($categoryVaper->id);
        }

        Model::reguard();

        Schema::enableForeignKeyConstraints();

        $this->command->alert('¡Tablas actualizadas!');
        }
    }
}
