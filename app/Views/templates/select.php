        <section>

            <h3>회원매출조회</h3>
            <br>

            <table border = "1" width="500px"> 

                <tr>

                    <th width="20%">회원번호</th>
                    <th width="20%">회원성명</th>
                    <th width="30%">고객등급</th>
                    <th width="30%">매출</th>

                </tr>


                <?php
                    
                    foreach($moneys as $money):


                        $grade = "haha";
                        
                        if($money['grade'] == 'A'):

                            $grade = "VIP";

                        elseif($money['grade'] == 'B'):

                            $grade = "일반";

                        elseif($money['grade'] == 'C'):

                            $grade = "직원";

                        else:

                            $grade = "오이잉??";

                        endif;


                ?>

                    <tr>

                        <td> <?= $money['custno'] ?> </td>
                        <td> <?= $money['custname'] ?> </td>
                        <td> <?= $grade ?> </td>
                        <td> <?= $money['price'] ?> </td>
                    
                    </tr>

                <?php

                    endforeach;

                ?>

            </table>


        </section>
