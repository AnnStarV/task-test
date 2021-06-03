let changeData = (value, name) => {
    var reg = /\S+@\S+\.\S+/;
   
    let elem = document.getElementsByName(name)[0];
    if(elem.name == "email"){
        reg.test(String(value))?elem.id = 'succes':elem.id = 'warning';
    }
    else (value.length<=2)?elem.id = 'warning':elem.id = 'succes';
    
}