<?php


namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\MemberModel;


class Pages extends Controller
{

    public function index()
    {
    
        echo view('templates/layout');
        echo view('templates/home');

    }


    public function haha()
    {
        
        error_reporting(E_ALL);
        ini_set('display_errors', '1');


       $memberModel = model('App\Models\MemberModel');

        $members =  $this->memberModel->findAll();
        echo print_r($members);

    }


    public function sign_up()
    {

        $memberModel = model('App\Models\MemberModel');

        $memberModel->selectMax('custno', 'max');
        $memberModel->select("DATE_FORMAT(NOW(), '%Y%m%d') as joindate");

        $data = $memberModel->first();
        
        
        echo view('templates/layout');
        echo view('templates/sign_up', $data);

    }


    public function insert()
    {

        error_reporting(E_ALL);
        ini_set('display_errors', '1');


        $memberModel = model('App\Models\MemberModel');
                

        $memberModel->set('custno', $_POST['custno']);
        $memberModel->set('custname', $_POST['custname']);
        $memberModel->set('phone', $_POST['phone']);
        $memberModel->set('address', $_POST['address']);
        $memberModel->set('joindate', 'NOW()', FALSE);
        $memberModel->set('grade', $_POST['grade']);
        $memberModel->set('city', $_POST['city']);

        $memberModel->insert();


        $this->response->redirect('/Pages/main');

    }



    public function main()
    {

        $memberModel = model('App\Models\MemberModel');

        $memberModel->select('custno');
        $memberModel->select('custname');
        $memberModel->select('phone');
        $memberModel->select('address');
        $memberModel->select("DATE_FORMAT(joindate, '%Y-%m-%d') as joindate");
        $memberModel->select('grade');
        $memberModel->select('city');

        $members =  $memberModel->findAll();
        $data = array('members' => $members);
        
    
        echo view('templates/layout');
        echo view('templates/main', $data);

    }


    public function select()
    {

        $moneyModel = model('App\Models\MoneyModel');

        $query = "SELECT n.custno, m.custname, m.grade, sum(n.price) as sum " 
                ."FROM money_tbl_02 n INNER JOIN member_tbl_02 m " 
                ."ON n.custno = m.custno GROUP BY n.custno ORDER BY sum(n.price) desc ";

        $moneyModel->join('member_tbl_02', 'member_tbl_02.custno = money_tbl_02.custno');
        $moneyModel->select('money_tbl_02.custno');
        $moneyModel->select('member_tbl_02.custname');
        $moneyModel->select('member_tbl_02.grade');
        $moneyModel->select('money_tbl_02.custno');
        $moneyModel->selectSum('money_tbl_02.price');
        $moneyModel->groupBy('money_tbl_02.custno');
        $moneyModel->orderBy('sum(money_tbl_02.price)', 'DESC');

        $moneys =  $moneyModel->findAll();
        $data = array('moneys' => $moneys);

        
        echo view('templates/layout');
        echo view('templates/select', $data);

    }


    public function update_form($custno)
    {
        
        $memberModel = model('App\Models\MemberModel');

        $memberModel->select('custno');
        $memberModel->select('custname');
        $memberModel->select('phone');
        $memberModel->select('address');
        $memberModel->select("DATE_FORMAT(joindate, '%Y%m%d') as joindate");
        $memberModel->select('grade');
        $memberModel->select('city');

        $memberModel->where('custno', $custno);

        $member = $memberModel->first();

        $data = array('member' => $member);


        echo view('templates/layout');
        echo view('templates/update', $data);


    }

    public function update()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');


        $memberModel = model('App\Models\MemberModel');
                
        $memberModel->set('custname', $_POST['custname']);
        $memberModel->set('phone', $_POST['phone']);
        $memberModel->set('address', $_POST['address']);
        $memberModel->set('joindate', $_POST['joindate']);
        $memberModel->set('grade', $_POST['grade']);
        $memberModel->set('city', $_POST['city']);


        $memberModel->where('custno', $_POST['custno']);
        $memberModel->update();

        $this->response->redirect('/Pages/main');

    }

    
}
