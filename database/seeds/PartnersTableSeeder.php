<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
        	[
        		'name' => 'BOB',
	            'caption' => 'Bank Of Baroda',
	            'logo' => 'R742R0VRCRbUOG2YjwvQfsWP84U4pXNMwWW1h1gI.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'HDFC',
	            'caption' => 'HDFC Bank',
	            'logo' => 'uJeSeqk16utN6VEDAxPS2eX8evWx39ZqyKuyB5rK.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'SBI',
	            'caption' => 'State Bank Of India',
	            'logo' => 'ywQP55Tw114tsou95DORzzBR6nOjRszUhqDPEw8y.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'BOB 2',
	            'caption' => 'Bank Of Baroda 2',
	            'logo' => 'snnAJcwohQBGnBYzkojp7vFXhI8EjTwn3WKTRd0c.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'HDFC 2',
	            'caption' => 'HDFC Bank 2',
	            'logo' => 'MN0o5Ae6GLqtoydSICiQSdkwTpmjo0yA0uVrbiji.jpeg',
	            'status' => 1,
        	],
        	[
        		'name' => 'SBI 2',
	            'caption' => 'State Bank Of India 2',
	            'logo' => 'XG5ejJQqqDg2bWa16kcsKpNrD96KVD2RUNK4dPI2.jpeg',
	            'status' => 1,
        	],
        ]);
    }
}
