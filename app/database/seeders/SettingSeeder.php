<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $settings = [

            'store_name'     => 'سوپرمارکت نمونه',

            'phone'          => '02112345678',

            'mobile'         => '09120000000',

            'address'        => 'تهران',

            'website'        => '',

            'receipt_footer' => 'از خرید شما سپاسگزاریم',

            'currency'       => 'تومان',

            'receipt_width'  => '80',

            'show_logo'      => '1',

            'show_qrcode'    => '1',

        ];

        foreach ($settings as $key => $value) {

            Setting::updateOrCreate(

                ['key' => $key],

                ['value' => $value]
 
        );

}
    }
}
