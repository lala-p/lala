<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>쇼핑몰 회원관리 site</title>
        <script type="text/javascript" src="jjj.js"></script>
        <link type="text/css" rel="stylesheet" href="fff.css">
        
    </head>

    <body>

        <?php

            include_once 'header.php';
            include_once 'nav.php';

        ?>

        <section>

            <h3>홈쇼핑 회원 정보 수정</h3>
            <br>

            <form method="GET" action="update2_action.php" id="f2"> 

                <table border="1" width="600px">

                    <tr>
                        <th width="40%">회원번호(자동발생)</th>
                        <td><input type="text" name="custno" id="custno" value="<? echo $_GET['custno'] ?>" readonly="readonly" style="float: left; width: 100px;"></td>
                    </tr>

                    <tr>
                        <th>회원성명</th>
                        <td><input type="text" name="custname" id="custname" style="float: left; width: 100px;"></td>
                    </tr>

                    <tr>
                        <th>회원전화</th>
                        <td><input type="text" name="phone" id="phone" style="float: left; width: 100px;"></td>
                    </tr>

                    <tr>
                        <th>회원주소</th>
                        <td><input type="text" name="address" id="address" style="float: left; width: 170px;"></td>
                    </tr>

                    <tr>
                        <th>가입일자</th>
                        <td><input type="text" name="joindate" id="joindate" style="float: left; width: 250px;"></td>
                    </tr>


                    <tr>
                        <th>고객등급[A:VIP,B:일반,C:직원]</th>
                        <td><input type="text" name="grade" id="grade" style="float: left; width: 100px;"></td>
                    </tr>

                    <tr>
                        <th>도시코드</th>
                        <td><input type="text" name="city" id="city" style="float: left; width: 100px;"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="button" onclick="f2click()">등록</button>
                            <button type="button" onclick="location.href = './updateForm.php'">조회</button>
                        </td>
                    </tr>

                </table>

            </form>

        </section>

        <?php

            include_once 'footer.php';

        ?>

    </body>
</html>