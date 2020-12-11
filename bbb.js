window.onload = function(){

    var headerTag = document.createElement("header");
    var headerTxt = document.createTextNode("성적 관리 프로그램");

    headerTag.appendChild(headerTxt);



    var navTag = document.createElement("nav");

    navTag.appendChild(create_aTag("home", "index.html"));
    navTag.appendChild(create_aTag("학생 등록", "insert1.html"));
    navTag.appendChild(create_aTag("학생 조회", "select1.html"));
    navTag.appendChild(create_aTag("성적 기입", "insert2.html"));
    navTag.appendChild(create_aTag("성적 조회", "select2.html"));


    var secTag = document.createElement("section");
    var dataDiv = document.getElementById("data");
    var subTitle = document.getElementById("subTitle");

    secTag.appendChild(subTitle);
    secTag.appendChild(dataDiv);


    var footerTag = document.createElement("footer");
    var footerTxt = document.createTextNode("I want to go home");

    footerTag.appendChild(footerTxt);


    document.body.appendChild(headerTag);
    document.body.appendChild(navTag);
    document.body.appendChild(secTag);
    document.body.appendChild(footerTag);
}




function create_aTag(text, href){

    var aTag = document.createElement("a");
    var aTxt = document.createTextNode(text);

    aTag.appendChild(aTxt);
    aTag.setAttribute("href", href);
    aTag.setAttribute("class", "navATag");

    return aTag;

}



function insert1Fo(){

    var fo = document.getElementById("fo");

    var no = document.getElementById("no");
    var name = document.getElementById("name");
    var male = document.getElementById("male");
    var female= document.getElementById("female");
    var tel = document.getElementById("tel");
    var email1 = document.getElementById("email1");
    var email2 = document.getElementById("email2");


    if(no.value == ""){
        alert("학번을 입력해 주세요.");
        no.focus();

    }else if(name.value == ""){
        alert("이름을 입력해 주세요.");
        name.focus();

    }else if(male.checked == false && female.checked == false){
        alert("성별을 입력해 주세요.");
        male.focus();

    }else if(tel.value == ""){
        alert("전화번호를 입력해 주세요.");
        tel.focus();

    }else if(email1.value == ""){
        alert("이메일 앞자리를 입력해 주세요.");
        email1.focus();

    }else if(email2.value == ""){
        alert("이메일 뒷자리를 입력해 주세요.");
        email2.focus();

    }else{

        fo.submit();

    } 

}






function insert2Fo(){

    var fo = document.getElementById("fo");

    var no = document.getElementById("no");
    var korean = document.getElementById("korean");
    var math = document.getElementById("math");
    var social = document.getElementById("social");
    var science = document.getElementById("science");
    var english = document.getElementById("english");



    if(no.value == ""){
        alert("학번을 입력해 주세요.");
        no.focus();

    }else if(korean.value == ""){
        alert("국어 점수를 입력해 주세요.");
        korean.focus();

    }else if(math.value == ""){
        alert("수학 점수를 입력해 주세요.");
        math.focus();

    }else if(social.value == ""){
        alert("사회 점수를 입력해 주세요.");
        social.focus();

    }else if(science.value == ""){
        alert("과학 점수를 입력해 주세요.");
        science.focus();

    }else if(english.value == ""){
        alert("영어 점수를 입력해 주세요.");
        english.focus();

    }else{

        fo.submit();

    } 





}
	



