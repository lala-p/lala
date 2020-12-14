<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>성적 관리 프로그램 [학생 정보 수정]</title>
        <script type="text/javascript" src="jjj.js"></script>
        <link rel="stylesheet" type="text/css" href=vava.css> 

    </head>

    <body>

        <div id="subTitle"> 학생 정보 수정 </div>
        <div id="data">

			<form method="GET" action="student_event.php" id="fo">

                <?php
                    $no = $_GET['no']; 
                    
                ?>

				<table>
				
					<tr>
						<td>학번</td>	
						<td>:</td>			
						<td><input type="text" id="no" name="no" value="<? echo $no; ?>" readonly="readonly"></td>				
					
					</tr>
					
						
					<tr>
						<td>이름</td>				
						<td>:</td>			
						<td><input type="text" id="name" name="name" placeholder="이름을 입력해주세요"></td>				
					
					</tr>
				
					<tr>
						<td>성별</td>				
						<td>:</td>			
						<td> 
		
							<input type="radio" id="male" name="gender" value="1"> 남자 &nbsp;
							<input type="radio" id="female" name="gender" value="2"> 여자
						
						</td>
		
					
					</tr>
				
					<tr>
						<td>전화번호</td>				
						<td>:</td>			
						<td><input type="text" id="tel" name="tel" placeholder="전화번호를 입력해주세요"></td>				
					
					</tr>
				
					<tr>
						<td>이메일</td>				
						<td>:</td>			
						<td>
		
						<input type="text" id="email1" name="email1" placeholder="이메일 앞자리"> @
						
						<select id="email2" name="email2">
						
							<option selected="selected" disabled="disabled">이메일 뒷자리</option>
							<option value="cart.rider">cart.rider</option>
							<option value="ghk.net">ghk.net</option>						
							<option value="gmail.com">gmail.com</option>						
							<option value="lulu.lala">lulu.lala</option>						
							<option value="naver.com">naver.com</option>						
							<option value="sudden.attack">sudden.attack</option>						
						
						</select>
						
						</td>				
					
					</tr>

					<tr>
						
						<td colspan="3">
							<input type="hidden" name="do" value="update">
							<button type="button" onclick="insert1Fo()">학생 등록</button>
							<button type="reset">초기화</button>
						
						</td>
					
					</tr>

				
						
				</table>

			</form>

        </div>


    </body>

</html>

