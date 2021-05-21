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

            <h3>회원매출조회</h3>
            <br>

            <table border="1" width= "500px">

                <tr>

                    <th>회원번호</th>
                    <th>회원성명</th>
                    <th>고객등급</th>
                    <th>매출</th>

                </tr>

            <?php
                    
                    include_once 'dbcon.php';

                    $query = "SELECT n.custno, m.custname, m.grade, sum(n.price) as sum " 
                                ."FROM money_tbl_02 n INNER JOIN member_tbl_02 m " 
                                ."ON n.custno = m.custno GROUP BY n.custno ORDER BY sum(n.price) desc ";

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
                    <td width="20%">
                        <? echo $row['custno'] ?>
                    </td>
                    <td width="20%">
                        <? echo $row['custname'] ?>
                    </td>
                    <td width="30%">
                        <? echo $grade ?>
                    </td>
                    <td width="30%">
                        <? echo $row['sum'] ?>
                    </td>
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