<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Money;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sign_up()
    {

        $max = Member::max('custno')+1 ;
        
        return view('sign_up', ['max' => $max ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        Member::create(request([
            'custno',
            'custname',
            'phone',
            'address',
            'joindate',
            'grade',
            'city'
                            ]));

        return redirect('/main');
    }



    public function show1()
    {
        
        $members = Member::all();

        return view('main', ['members' => $members]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Money
     * @return \Illuminate\Http\Response
     */

    public function show2()
    {
    
        // $query = "SELECT n.custno, m.custname, m.grade, sum(n.price) as sum " 
        //         ."FROM money_tbl_02 n INNER JOIN member_tbl_02 m " 
        //         ."ON n.custno = m.custno GROUP BY n.custno ORDER BY sum(n.price) desc ";

        $moneys = Money::join('member_tbl_02', 'money_tbl_02.custno', '=', 'member_tbl_02.custno')
                        ->select(

                            'money_tbl_02.custno', 
                            'member_tbl_02.custname', 
                            'member_tbl_02.grade', 
                            Money::raw('sum(money_tbl_02.price) as sum')
                             
                        )
                        ->groupBy('money_tbl_02.custno')
                        ->orderBy(Money::raw('sum(money_tbl_02.price)'), 'DESC')
                        ->get();

        return view('select', ['moneys' => $moneys]);
                
    }

    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_page($custno)
    {

        $cust = Member::select([

                    'custno',
                    'custname',
                    'phone',
                    'address',
                    'joindate',
                    'grade',
                    'city'

                ])
                ->where('custno', $custno)
                ->first();

        return view('update', ['cust' => $cust]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {

        Member::where('custno', request(['custno']))
                ->update(request([

                    'custname',
                    'phone',
                    'address',
                    'joindate',
                    'grade',
                    'city'
                                    ]));
        
        return redirect('/main');

    }

}
