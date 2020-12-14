<?php

include_once 'conn.php';

    $do = $_GET['do'];

    $no = $_GET['no'];
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $tel = $_GET['tel'];
    $email = $_GET['email1'].'@'.$_GET['email2'];


    $query = "";
    $alText = "";	

    if($do == "insert"):

        $query = "INSERT INTO student_tbl VALUES ('{$no}','{$name}','{$gender}','{$tel}','{$email}')";
	$alText = "등록 성공!";	

    elseif($do == "update"):

        $query = "UPDATE student_tbl SET name='{$name}', gender='{$gender}', tel='{$tel}', email='{$email}' WHERE no='{$no}'";    
	    $alText = "수정 성공!";

    elseif($do == "delete"):

        $query = "DELETE FROM student_tbl WHERE no='{$no}';";
        $query .= "DELETE FROM grade_tbl WHERE no='{$no}'";

        $alText = "삭제 성공!";

    endif;



    
    if(mysqli_multi_query($conn, $query)):
    
	    echo '<script type="text/javascript">'.' alert("'.$alText.'");'.' location.href = "select1.html"; '.'</script>';	
        do_commit($conn);
    
    else:
    

        echo "<script type=\"text/javascript\"> ";
        echo "if(confirm(\"이미 이 학생이 등록되어 있습니다. 수정하시겠습니까?\")){";
        echo "location.href= \"update1.html?no={$no}\";";
        echo "}else{";    
        echo "location.href= \"select1.html\";";
        echo "}";
        echo "</script>";
        


    endif;


    mysql_close($conn);     

?>
