<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MemberSeeder extends Seeder
{
	public function run()
	{
		$data = [

			[
				'custno'   => 100001,
				'custname' => '김행복',
				'phone'    => '010-1111-2222',
				'address'  => '서울 동대문구 휘경 1동',
				'joindate' => Time::now(), 
				'grade'    => 'A',
				'city'     => '01'
			],
			[
				'custno'   => 100002,
				'custname' => '이축복',
				'phone'    => '010-1111-3333',
				'address'  => '서울 동대문구 휘경 2동',
				'joindate' => Time::now(), 
				'grade'    => 'B',
				'city'     => '01'
			],
			[
				'custno'   => 100003,
				'custname' => '장믿음',
				'phone'    => '010-1111-4444',
				'address'  => '울릉군 울릉읍 독도1리',
				'joindate' => Time::now(), 
				'grade'    => 'B',
				'city'     => '30'
			],
			[
				'custno'   => 100004,
				'custname' => '최사랑',
				'phone'    => '010-1111-5555',
				'address'  => '울릉군 울릉읍 독도2리',
				'joindate' => Time::now(), 
				'grade'    => 'A',
				'city'     => '30'
			],
			[
				'custno'   => 100005,
				'custname' => '진평화',
				'phone'    => '010-1111-6666',
				'address'  => '제주도 제주시 외나무골',
				'joindate' => Time::now(), 
				'grade'    => 'B',
				'city'     => '60'
			],
			[
				'custno'   => 100006,
				'custname' => '차공단',
				'phone'    => '010-1111-7777',
				'address'  => '제주도 제주시 감나무골',
				'joindate' => Time::now(), 
				'grade'    => 'B',
				'city'     => '60'
			],
			
		];


		$this->db->table('member_tbl_02')->insertBatch($data);



	}
}
