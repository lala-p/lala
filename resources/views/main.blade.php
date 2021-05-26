@extends('layouts.main_layout')

@section('subTitle')
회원목록조회/수정
@endsection


@section('content')

<table border="1" width="1000px">
@csrf
    <tr>
        <th>회원번호</th>
        <th>회원성명</th>
        <th>전화번호</th>
        <th>주소</th>
        <th>가입일자</th>
        <th>고객등급</th>
        <th>거주지역</th>    
    </tr>


    @foreach($members as $member)
    
    <tr>
    
        <td> <a href="/update/{{ $member->custno }}"> {{ $member->custno }} </a> </td>
        <td>{{ $member->custname }}</td>
        <td>{{ $member->phone }}</td>
        <td>{{ $member->address }}</td>
        <td>{{ $member->joindate }}</td>
        <td>{{ $member->grade }}</td>
        <td>{{ $member->city }}</td>

    </tr>

    @endforeach
    
    
</table>

@endsection