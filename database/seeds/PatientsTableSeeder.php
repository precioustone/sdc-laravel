<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientsTableSeeder extends Seeder
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

        DB::table('patients')->insert([
            'name'	=>	'Precious Idam',
            'age' => '25',
            'sex'	=>	'male',
            'email' => 'preciousidam@yahoo.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'software developer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Ebube Idam',
            'age' => '25',
            'sex'	=>	'male',
            'email' => 'preciousidam@gmail.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'software developer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);
        
        DB::table('patients')->insert([
            'name'	=>	'Edna Idam',
            'age' => '28',
            'sex'	=>	'female',
            'email' => 'ednaidam@yahoo.com',	
            'phone' => '07036062971',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Accountant',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Lily Idam',
            'age' => '32',
            'sex'	=>	'female',
            'email' => 'lilyidam@yahoo.com',	
            'phone' => '08038701044',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Fashion designer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Chizaram Idam',
            'age' => '19',
            'sex'	=>	'male',
            'email' => 'chizaramidam@yahoo.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'student',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Jennifer Obafemi-Samuel',
            'age' => '31',
            'sex'	=>	'female',
            'email' => 'jennysmiles@yahoo.com',	
            'phone' => '08034091358',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Dental therapist',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);
        DB::table('patients')->insert([
            'name'	=>	'Precious Idam',
            'age' => '25',
            'sex'	=>	'male',
            'email' => 'preciousidam1@yahoo.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'software developer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Ebube Idam',
            'age' => '25',
            'sex'	=>	'male',
            'email' => 'preciousidam1@gmail.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'software developer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Edna Idam',
            'age' => '28',
            'sex'	=>	'female',
            'email' => 'ednaidam1@yahoo.com',	
            'phone' => '07036062971',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Accountant',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Lily Idam',
            'age' => '32',
            'sex'	=>	'female',
            'email' => 'lilyidam1@yahoo.com',	
            'phone' => '08038701044',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Fashion designer',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Chizaram Idam',
            'age' => '19',
            'sex'	=>	'male',
            'email' => 'chizaramidam1@yahoo.com',	
            'phone' => '08162300796',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'student',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);

        DB::table('patients')->insert([
            'name'	=>	'Jennifer Obafemi-Samuel',
            'age' => '31',
            'sex'	=>	'female',
            'email' => 'jennysmiles1@yahoo.com',	
            'phone' => '08034091358',
            'home' => '4 abideen bamgbala street idowu estate oKeira bustop ajah',
            'occupation' => 'Dental therapist',
            'created_at' => $dt->toDateTimeString(),
            'updated_at' => $dt->toDateTimeString(),
            'avatar' => 'https://lh3.googleusercontent.com/-jZH3rhQKHtE/UntW3nznhyI/AAAAAAAAAOo/NkgNSkc5F7kjsbKo6EtDixAQvxZvaaLXACEwYBhgL/w140-h140-p/Ebube.jpg'
        ]);
    }
}
