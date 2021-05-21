function f1click(){

    var f1 = document.getElementById("f1");

    var custno = document.getElementById("custno");
    var custname = document.getElementById("custname");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");
    var joindate = document.getElementById("joindate");
    var grade = document.getElementById("grade");
    var city = document.getElementById("city");


    if(custno.value == ""){
        
        alert("회원번호가 입력되지 않았습니다.");
        custno.focus();

    }else if(custname.value == ""){

        alert("회원성명이 입력되지 않았습니다.");
        custname.focus();

    }else if(phone.value == ""){

        alert("회원전화가 입력되지 않았습니다.");
        phone.focus();

    }else if(address.value == ""){

        alert("회원주소가 입력되지 않았습니다.");
        address.focus();

    }else if(joindate.value == ""){

        alert("가입일자가 입력되지 않았습니다.");
        joindate.focus();

    }else if(grade.value == ""){

        alert("고객등급이 입력되지 않았습니다.");
        grade.focus();

    }else if(city.value == ""){

        alert("도시코드가 입력되지 않았습니다.");
        city.focus();

    }else{

        f1.submit();

    }

}



function f2click(){

    var f2 = document.getElementById("f1");

    var custno = document.getElementById("custno");
    var custname = document.getElementById("custname");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");
    var joindate = document.getElementById("joindate");
    var grade = document.getElementById("grade");
    var city = document.getElementById("city");


    if(custno.value == ""){

        alert("회원번호가 입력되지 않았습니다.");
        custno.focus();

    }else if(custname.value == ""){

        alert("회원성명이 입력되지 않았습니다.");
        custname.focus();

    }else if(phone.value == ""){

        alert("회원전화가 입력되지 않았습니다.");
        phone.focus();

    }else if(address.value == ""){

        alert("회원주소가 입력되지 않았습니다.");
        address.focus();

    }else if(joindate.value == ""){

        alert("가입일자가 입력되지 않았습니다.");
        joindate.focus();

    }else if(grade.value == ""){

        alert("고객등급이 입력되지 않았습니다.");
        grade.focus();

    }else if(city.value == ""){

        alert("도시코드가 입력되지 않았습니다.");
        city.focus();

    }else{

        f2.submit();

    }

    
}