<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dt = Carbon::now();

        DB::table('users')->insert([
            'name'	=>	'Precious Idam',
            'username' => 'precioustone',
            'email'	=>	'preciousidam@gmail.com',
            'password' => bcrypt('lilian01'),	
            'phone' => '08162300796',
            'address' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'position' => 'software developer',
            'role' => 'super admin',  
            'created_at' => $dt->toDateTimeString()
        ]);
    }
}
