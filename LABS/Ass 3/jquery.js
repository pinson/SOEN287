
    var currentTime = new Date()
    var month = currentTime.getMonth();
    var day = currentTime.getDate();
    var year = currentTime.getFullYear();
    var time = currentTime.getHours();
    var min = currentTime.getMinutes();
    var sec = currentTime.getSeconds();
    var div = document.getElementById("log");

    function displayResult()
{
    var text = document.getElementById("myTextarea").value;
 
    var div0 = document.getElementById("log");	
    var para = document.createElement("p");
    div0.appendChild(para);
    var text = document.createTextNode(text+"...." + month + "/" + day + "/" + year +" "+time + ":"+ min +":" + sec);
    para.appendChild(text);
}


    /* function checkinfo(){
	

//trying to write on the pages 
    var div = document.getElementById("log");
    var para = document.createElement("p");
    div.appendChild(para);
    var text = document.createTextNode("Tst 1 "+"...."+month + "/" + day + "/" + year +" "+time + ":"+ min +":" + sec);
    para.appendChild(text);
    }

    function addentry(){
 
    var div1 = document.getElementByName("userinput").value;
    var text = div1.toString();

    var div0 = document.getElementById("log");	
    var para = document.createElement("p");
    div0.appendChild(para);
    var text = document.createTextNode(text+"...." + month + "/" + day + "/" + year +" "+time + ":"+ min +":" + sec);
    para.appendChild(text);
    }
    */

