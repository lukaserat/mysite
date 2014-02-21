<?php
class EmailTableSeeder extends Seeder {

    public function run()
    {
        // wipe existing records
        DB::connection('urlshort')->table('emails')->delete();

        // insert test user
        Email::create(array(
        	'email' => 'me@josephlacerna.com',
        	'password' => Hash::make('password')
        ));
        // insert a user that will handle all the url shortening of guest users
        Email::create(array(
            'email' => 'urlshort@josephlacerna.com',
            'password' => Hash::make('password')
        ));
    }

}