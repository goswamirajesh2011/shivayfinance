<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
        	[
        		'name' => 'Slide One',
	            'caption' => 'Caption One',
	            'slide' => 'E9h8AbWmSNuBR5kpqZ1Fmea3wOBbBUINjtXIFR2i.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'Slide Two',
	            'caption' => 'Caption Two',
	            'slide' => '4rZcvC0OVLvQB3qabYXLYAKhYbPrcKNcd5EKEG8h.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'Slide Three',
	            'caption' => 'Caption Three',
	            'slide' => 'NC7BbRQSiIaOH4PL2E5oOK7W0JjMZTNDcrpyhLV8.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'Slide Four',
	            'caption' => 'Caption Four',
	            'slide' => 'IFIUFIoGVUrXevsxAOlgvp7ZinugaYYfVOguoMBm.jpeg',
	            'status' => 1,
        	],
        ]);
    }
}
