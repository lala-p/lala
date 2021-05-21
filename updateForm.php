<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>쇼핑몰 회원관리 site</title>
        <link type="text/css" rel="stylesheet" href="fff.css">

    </head>

    <body>

        <?php

            include_once 'header.php';
            include_once 'nav.php'; 

        ?>

        <section>
            <h3>회원목록조회/수정</h3>
            <br>

                <table border="1" width="1000px"> 

                    <tr>

                        <th>회원번호</th>
                        <th>회원성명</th>
                        <th>전화번호</th>
                        <th>주소</th>
                        <th>가입일자</th>
                        <th>고객등급</th>
                        <th>거주지역</th>

                    </tr>

                    <?php
                    
                        include_once 'dbcon.php';

                        $query = "SELECT custno, custname, phone, address, joindate, grade, city FROM member_tbl_02";
                        $result_set = mysqli_query($conn, $query);
                        $row = "";
                        
                        if($conn):

                            while($row = mysqli_fetch_array($result_set)):
                                $grade = "";

                                if( $row['grade'] == "A" ){
    
                                    $grade = "VIP";
    
    
                                }elseif( $row['grade'] == "B" ){
    
                                    $grade = "일반";
    
    
                                }elseif( $row['grade'] == "C" ){
    
                                    $grade = "직원";
    
    
                                }else{
                                    
                                    $grade = "??????";
    
                                }
                                
                    ?>

                    <tr>
                            <td><a href="./update2Form.php?custno=<? echo $row['custno'] ?>"> <? echo $row['custno'] ?> </a></td>
                            <td> <? echo $row['custname'] ?> </td>
                            <td> <? echo $row['phone'] ?> </td>
                            <td> <? echo $row['address'] ?> </td>
                            <td> <? echo $row['joindate'] ?> </td>
                            <td> <? echo $grade ?> </td>
                            <td> <? echo $row['city'] ?> </td>
                    </tr>


                    <? 
                              endwhile;

                        else:

                            echo "wrong!".mysqli_error($conn);
                        
                        endif;
                    
                    ?>


                </table>

        </section>

        <?php

            include_once 'footer.php';

        ?>

    </body>
</html>