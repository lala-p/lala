<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>성적 관리 프로그램 [HOME]</title>
        <script type="text/javascript" src="jjj.js"></script>
        <link rel="stylesheet" type="text/css" href=vava.css>

    </head>

    <body>

        <div id="subTitle"> 성적 조회 </div>
        <div id="data">


                        <table border="1">

                                <tr>
					<th> 등수	
                                        <th> 학번
                                        <th> 이름
                                        <th> 국어 
                                        <th> 수학
                                        <th> 사회
					<th> 과학	
					<th> 영어
					<th> 합계
					<th> 평균
                                        <th> 수정/삭제

                                </tr>
	
				<form method="GET" action="grade_event.php" id="fo">
                                <?php

                                        include_once 'conn.php';

                                        $query = "SELECT  rank() over(ORDER BY (a.korean + a.math + a.social + a.science + a.english) DESC) as rank , a.no, b.name, a.korean, a.math, a.social, a.science, a.english, (a.korean + a.math + a.social + a.science + a.english) as sum, CAST((a.korean + a.math + a.social + a.science + a.english)/5 as signed integer) as avg FROM grade_tbl a, student_tbl b WHERE a.no=b.no ORDER BY (a.korean + a.math + a.social + a.science + a.english) DESC, a.no ASC";
                                        $result_set = mysqli_query($conn, $query);


                                        if ($conn):

                                                while($row = mysqli_fetch_array($result_set)):

                                                        echo '<tr>'.'<td>'.$row['rank'].'</td>';
                                                        echo '<td>'.$row['no'].'</td>';
                                                        echo '<td>'.$row['name'].'</td>';
                                                        echo '<td>'.$row['korean'].'</td>';
                                                        echo '<td>'.$row['math'].'</td>';
			       				echo '<td>'.$row['social'].'</td>';
			       			        echo '<td>'.$row['science'].'</td>';
			       			        echo '<td>'.$row['english'].'</td>';
			       				echo '<td>'.$row['sum'].'</td>';
			       			        echo '<td>'.$row['avg'].'</td>';
                                                ?>

                                <td>

					<a href="update2.html?no=<? echo $row['no'] ?>"><button type="button">수정</button></a> /
					<a href="grade_event.php?do=delete&no=<? echo $row['no'] ?>"><button type="button">삭제</button></a>  

                                         

                                        </td>
                                </tr>

                                <?

                                                endwhile;


                                        else:

                                                echo "레코드 수정 실패! : ".mysqli_error($conn);

                                        endif;


                                ?>






				</form>


                        </table>


        </div>


    </body>

</html>

