function myFunction1(op) {
    var n1 = parseInt(document.getElementById('number1').value);
    
    switch(op){
        case '+' : document.getElementById("number1").value = n1+1; break;
        case '-' : document.getElementById("number1").value = n1-1; break;
    }

    // if(op == '+'){
    // document.getElementById("number1").value = n1+1;
    // }else{
    //     document.getElementById("number1").value = n1-1;
    // }
}

function myCal(){
    var  n1 = parseInt(document.getElementById('number').value);
    var i = 1;
    var t = "";
    while(i < 13){
        t += document.getElementById("result").innerText = n1 * i;
        t += "<br>";
        i=i+1;
        
    }
}

 