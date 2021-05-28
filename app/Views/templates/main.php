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
                
                    foreach($members as $member):


                        $grade = "haha";
                        
                        if($member['grade'] == 'A'):

                            $grade = "VIP";

                        elseif($member['grade'] == 'B'):

                            $grade = "일반";

                        elseif($member['grade'] == 'C'):

                            $grade = "직원";

                        else:

                            $grade = "오이잉??";

                        endif;


                ?>


                

                    <tr>
                    
                        <td ><a href="/Pages/update/<?= $member['custno'] ?>"> <?= $member['custno'] ?> </a></td>
                        <td > <?= $member['custname'] ?> </td>
                        <td > <?= $member['phone'] ?> </td>
                        <td > <?= $member['address'] ?> </td>
                        <td > <?= $member['joindate'] ?> </td>
                        <td > <?= $grade ?> </td>
                        <td > <?= $member['city'] ?> </td>
                                        
                    </tr>

                <?php
                
                    endforeach;
                
                ?>
                
            </table>
        </section>
