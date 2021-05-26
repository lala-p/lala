@extends('layouts.main_layout')

@section('script')

<script type="text/javascript" src="{{ URL::asset('js/jaja.js') }}"></script>

@endsection

@section('subTitle')
홈쇼핑 회원 정보 수정
@endsection


@section('content')

<form method="POST" action="/update/member" id="updateFo">
@csrf

    <table border="1">

        <tr>
            <th>회원번호(자동발생)</th>
            <td> <input type="text" id="custno" name="custno" value="{{ $cust->custno }}" readonly="readonly" style="width: 100px;"> </td>
        </tr>


        <tr>
            <th>회원성명</th>
            <td> <input type="text" id="custname" name="custname" value="{{ $cust->custname }}" style="width: 100px;"> </td>
        </tr>


        <tr>
            <th>회원전화</th>
            <td> <input type="text" id="phone" name="phone" value="{{ $cust->phone }}" style="width: 100px;"> </td>
        </tr>


        <tr>
            <th>회원주소</th>
            <td> <input type="text" id="address" name="address" value="{{ $cust->address }}" style="width: 170px;"> </td>
        </tr>


        <tr>
            <th>가입일자</th>
            <td> <input type="text" id="joindate" name="joindate" value="{{ $cust->joindate }}" style="width: 250px;"> </td>
        </tr>


        <tr>
            <th>고객등급[A:VIP,B:일반,C:직원]</th>
            <td> <input type="text" id="grade" name="grade" value="{{ $cust->grade }}" style="width: 100px;"> </td>
        </tr>


        <tr>
            <th>도시코드</th>
            <td> <input type="text" id="city" name="city" value="{{ $cust->city }}" style="width: 100px;"> </td>
        </tr>
        

        <tr>
            <td colspan="2"> 
                <button type="button" onclick="updateFo_event()">수정</button>
                <button type="button" onclick="location.href = '/main'; ">조회</button>
            </td>
        </tr>

    </table>
</form>

@endsection
