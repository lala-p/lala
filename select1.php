<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>성적 관리 프로그램 [HOME]</title>
        <script type="text/javascript" src="jjj.js"></script>
        <link rel="stylesheet" type="text/css" href=vava.css> 

    </head>

    <body>

        <div id="subTitle"> 학생 조회 </div>
        <div id="data">


			<table border="1">
			
				<tr>
				
					<th>학번
					<th>이름
					<th>성별
					<th>전화번호
					<th>이메일
					<th>수정/삭제
					
				</tr>
				
				<form method="GET" action="student_event.php" id="fo">

				<?php 

					include_once 'conn.php';
				
					$query = "SELECT no, name, (CASE gender WHEN '1' THEN '남' WHEN '2' THEN '여' END) as gen, tel, email FROM student_tbl";
				 	$result_set = mysqli_query($conn, $query);
					$row = "";
					$num = "";

					if ($conn):
						
						while($row = mysqli_fetch_array($result_set)):
							
			       				echo '<tr>'.'<td>'.$row['no'].'</td>';
			       				echo '<td>'.$row['name'].'</td>';
			       				echo '<td>'.$row['gen'].'</td>';
			       				echo '<td>'.$row['tel'].'</td>';
			       				echo '<td>'.$row['email'].'</td>';
				?>
				
					<td>

						<a href="update1.html?no=<? echo $row['no'] ?>"><button type="button">수정</button></a> /
						<a href="student_event.php?do=delete&no=<? echo $row['no'] ?>"><button type="button">삭제</button></a>         			                          

					</td>
				</tr>
	
				</form>

				<?


						endwhile;
									       

					else:				
						echo "레코드 수정 실패! : ".mysqli_error($conn);
				
					endif;


				?>



			
			
				
				
								
			
			</table>


        </div>


    </body>

</html>

