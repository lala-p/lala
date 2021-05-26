
function insertFo_event() {

    var insertFo = document.getElementById('insertFo');    

    var custno = document.getElementById('custno');    
    var custname = document.getElementById('custname');    
    var phone = document.getElementById('phone');    
    var address = document.getElementById('address');    
    var joindate = document.getElementById('joindate');    
    var grade = document.getElementById('grade');    
    var city = document.getElementById('city');    


    if(custno.value == ""){

        alert("회원번호를 입력해주세요.");
        custno.focus();

    }else if(custname.value == ""){

        alert("회원성명을 입력해주세요.");
        custname.focus();

    }else if(phone.value == ""){

        alert("회원전화를 입력해주세요.");
        phone.focus();

    }else if(address.value == ""){

        alert("회원주소를 입력해주세요.");
        address.focus();

    }else if(joindate.value == ""){

        alert("가입일자를 입력해주세요.");
        joindate.focus();

    }else if(grade.value == ""){

        alert("고객등급을 입력해주세요.");
        grade.focus();

    }else if(city.value == ""){

        alert("도시코드를 입력해주세요.");
        city.focus();

    }else{

        alert("회원등록이 완료 되었습니다!");
        insertFo.submit();
    }


}


function updateFo_event() {
    

    var updateFo = document.getElementById('updateFo');    

    var custno = document.getElementById('custno');    
    var custname = document.getElementById('custname');    
    var phone = document.getElementById('phone');    
    var address = document.getElementById('address');    
    var joindate = document.getElementById('joindate');    
    var grade = document.getElementById('grade');    
    var city = document.getElementById('city');    


    if(custno.value == ""){

        alert("??????????");
        custno.focus();

    }else if(custname.value == ""){

        alert("회원성명을 입력해주세요.");
        custname.focus();

    }else if(phone.value == ""){

        alert("회원전화를 입력해주세요.");
        phone.focus();

    }else if(address.value == ""){

        alert("회원주소를 입력해주세요.");
        address.focus();

    }else if(joindate.value == ""){

        alert("가입일자를 입력해주세요.");
        joindate.focus();

    }else if(grade.value == ""){

        alert("고객등급을 입력해주세요.");
        grade.focus();

    }else if(city.value == ""){

        alert("도시코드를 입력해주세요.");
        city.focus();

    }else{

        alert("회원수정이 완료 되었습니다!");
        updateFo.submit();
    }

}