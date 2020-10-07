<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\User;


class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	 /*
	 * important note
	 * the seeders and factories has been changed with laravel 8
	 * https://laravel.com/docs/8.x/releases
	 */
	 
    public function run()
    {
		//  seeder without factories
		/*
        DB::table('invoices')->insert([
            'title' => Str::random(20),
            'body' => Str::random(140),
            'user_id' => 1,
			'created_at' => now(),
        ]);
		*/
		
		// with factories without relationships
	     Invoice::factory()->count(20)->create();

    }
}
