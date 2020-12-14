<?php

    include_once 'conn.php';


    $do = $_GET['do'];

    $no = $_GET['no'];
    $korean = $_GET['korean'];
    $math = $_GET['math'];
    $social = $_GET['social'];
    $science = $_GET['science'];
    $english = $_GET['english'];

    $query = "";
    $alText = "";

    if($do == "insert"):

        $query = "INSERT INTO grade_tbl VALUES ('{$no}',{$korean},{$math},{$social},{$science}, {$english})";
        $alText = "성적 기입 성공!!";

    elseif($do == "update"):

        $query = "UPDATE grade_tbl SET korean={$korean}, math={$math}, social={$social}, science={$science}, english={$english} WHERE no='{$no}'";
        $alText = "성적 수정 성공!!";

    elseif($do == "delete"):

        $query = "DELETE FROM grade_tbl WHERE no='{$no}'";
        $alText = "삭제 성공!!";
    
    endif;






    if(mysqli_query($conn, $query)):

        echo '<script type="text/javascript">'.' alert("'.$alText.'");'.' location.href = "select2.html"; '.'</script>';
        do_commit($conn);

    else:

        $erroNo = mysqli_errno($conn);



        if($erroNo == 1062): // primary key 중복 에러

            echo "<script type=\"text/javascript\"> ";
            echo "if(confirm(\"이미 이 학생의 성적이 기입되어 있습니다. 수정하시겠습니까?\")){";
            echo "location.href= \"update2.html?no={$no}\";";
            echo "}else{";    
            echo "location.href= \"select2.html\";";
            echo "}";
            echo "</script>";
                    

        elseif($erroNo == 1054): // 숫자가 아닌 타입으로 성적을 입력했을 때 나는 에러

            echo "<script type=\"text/javascript\"> ";
            echo "alert(\"장난치지 마세요^^\"); ";


            if($do == "insert"):
                echo "location.href= \"insert2.html\";";
            elseif($do == "update"):
                echo "location.href= \"update2.html?no={$no}\";";
            endif;

            echo "</script>";


        endif;

    

    echo mysqli_error($conn);
    echo mysqli_errno($conn);

    endif;

    mysql_close($conn);     


?>
