<?php

namespace App\Models;

use CodeIgniter\Model;

class MoneyModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'money_tbl_02';
	protected $primaryKey           = ['custno', 'saleno'];
	protected $useAutoIncrement     = false;

	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [

										'custno',
										'saleno',
										'pcost',
										'amount',
										'price',
										'pcode',
										'sdate'

									];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
