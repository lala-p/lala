        <script type="text/javascript" src="/js/jaja.js"></script>

        <section>

            <h3>홈쇼핑 회원 등록</h3>
            <br>
            <form method="POST" action="/Pages/sign_up/member" id="insertFo">

                <table border="1" width="600px">

                    <tr>
                        <th width="40%">회원번호(자동발생)</th>
                        <td> <input type="text" id="custno" name="custno" value="<?= $max+1 ?>" readonly="readonly" style="width: 100px;"> </td>
                    </tr>


                    <tr>
                        <th>회원성명</th>
                        <td> <input type="text" id="custname" name="custname" style="width: 100px;"> </td>
                    </tr>


                    <tr>
                        <th>회원전화</th>
                        <td> <input type="text" id="phone" name="phone" style="width: 100px;"> </td>
                    </tr>


                    <tr>
                        <th>회원주소</th>
                        <td> <input type="text" id="address" name="address" style="width: 170px;"> </td>
                    </tr>


                    <tr>
                        <th>가입일자</th>
                        <td> <input type="text" id="joindate" name="joindate" value="<?= $joindate ?>" readonly="readonly" style="width: 250px;"> </td>
                    </tr>


                    <tr>
                        <th>고객등급[A:VIP,B:일반,C:직원]</th>
                        <td> <input type="text" id="grade" name="grade" style="width: 100px;"> </td>
                    </tr>


                    <tr>
                        <th>도시코드</th>
                        <td> <input type="text" id="city" name="city" style="width: 100px;"> </td>
                    </tr>
                    

                    <tr>
                        <td colspan="2"> 
                            <button type="button" onclick="insertFo_event()">등록</button>
                            <button type="button" onclick="location.href = '/Pages/main'; ">조회</button>
                        </td>
                    </tr>

                </table>
            </form>

        </section>
