<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쇼핑몰 회원관리 site</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
        @yield('script')
    </head>
    <body>
        <header>
            <h1>쇼핑몰 회원관리 ver1.0</h1>
        </header>

        <nav>

            <a href="/sign_up">회원등록</a>
            <a href="/main">회원목록조회/수정</a>
            <a href="/select">회원매출조회</a>
            <a href="/">홈으로</a>

        </nav>
        <br>
        <section>
            <h3>@yield('subTitle')</h3>
            <br>
            @yield('content')

        </section>

        <footer>HRDKOREA Copyright@2016 All rights reserved, Human Resources Development Service of Korea</footer>
    </body>
</html>