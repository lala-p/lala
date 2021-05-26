@extends('layouts.main_layout')

@section('subTitle')
회원매출조회
@endsection

@section('content') 

<table border = "1" width="500px"> 

    <tr>

        <th width="20%">회원번호</th>
        <th width="20%">회원성명</th>
        <th width="30%">고객등급</th>
        <th width="30%">매출</th>

    </tr>

    @foreach($moneys as $money)

    <tr>
    
        <td> {{ $money->custno }} </td>
        <td> {{ $money->custname }} </td>
        <td> {{ $money->grade }} </td>
        <td> {{ $money->sum }} </td>
            
    </tr>

    @endforeach

</table>

@endsection