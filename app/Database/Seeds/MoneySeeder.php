<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class MoneySeeder extends Seeder
{
	public function run()
	{
		
		$data = [

			[
				'custno' => 100001,
				'saleno' => 20160001,
				'pcost'  => 500,
				'amount' => 5,
				'price'  => 2500, 
				'pcode'  => 'A001',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100001,
				'saleno' => 20160002,
				'pcost'  => 1000,
				'amount' => 4,
				'price'  => 4000, 
				'pcode'  => 'A002',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100001,
				'saleno' => 20160003,
				'pcost'  => 500,
				'amount' => 3,
				'price'  => 1500, 
				'pcode'  => 'A008',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100002,
				'saleno' => 20160004,
				'pcost'  => 2000,
				'amount' => 1,
				'price'  => 2000, 
				'pcode'  => 'A004',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100002,
				'saleno' => 20160005,
				'pcost'  => 500,
				'amount' => 1,
				'price'  => 2500, 
				'pcode'  => 'A001',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100003,
				'saleno' => 20160006,
				'pcost'  => 1500,
				'amount' => 2,
				'price'  => 3000, 
				'pcode'  => 'A003',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100004,
				'saleno' => 20160007,
				'pcost'  => 500,
				'amount' => 2,
				'price'  => 1000, 
				'pcode'  => 'A001',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100004,
				'saleno' => 20160008,
				'pcost'  => 300,
				'amount' => 1,
				'price'  => 300, 
				'pcode'  => 'A005',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100004,
				'saleno' => 20160009,
				'pcost'  => 600,
				'amount' => 1,
				'price'  => 600, 
				'pcode'  => 'A006',
				'sdate'  => Time::now()
			],
			[
				'custno' => 100004,
				'saleno' => 20160010,
				'pcost'  => 3000,
				'amount' => 1,
				'price'  => 3000, 
				'pcode'  => 'A007',
				'sdate'  => Time::now()
			],
			
		];


		$this->db->table('money_tbl_02')->insertBatch($data);

	}
}
