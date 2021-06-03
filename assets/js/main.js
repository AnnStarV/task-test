let changeData = (value, name) => {
    var reg = /\S+@\S+\.\S+/;
   
    let elem = document.getElementsByName(name)[0];
    if(elem.name == "email"){
        reg.test(String(value))?elem.id = 'succes':elem.id = 'warning';
    }
    else (value.length<=2)?elem.id = 'warning':elem.id = 'succes';
    
}
function getCookie(cookieName) {
    let cookie = {};
    document.cookie.split(';').forEach(function(el) {
      let [key,value] = el.split('=');
      cookie[key.trim()] = value;
    })
    return cookie[cookieName];
  }

  function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
document.addEventListener("DOMContentLoaded", function(){
    let result = getCookie("ResultReg");
    if(result == "success") alert("success registration!");
    else if(result == "fail") alert("fail registration!");

    result = getCookie("ResultLog");
    if(result == "fail") alert("fail login!");
    else if(result!=undefined) alert(result+", success login!");
    deleteAllCookies();
});
