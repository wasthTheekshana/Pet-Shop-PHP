
function search() {
    var req = new XMLHttpRequest();
    
    req.onreadystatechange=function (){
      if(req.readyState==4 && req.status==200){
          document.getElementById("box").innerHTML = req.responseText;
          
      }  
    };
    var pic = document.getElementById("sear").value;
    req.open("GET","search.php?to="+pic,true);
    req.send();
}





function homeSear() {
     
     var sear = new XMLHttpRequest();
     
     sear.onreadystatechange=function () {
      if(sear.readyState==4 && sear.status==200){
          document.getElementById("homeBox").innerHTML = sear.responseText;
      }  
    };
     
     var allpic = document.getElementById("sel").value;
     sear.open("GET","homeall.php?y"+allpic,true);
     sear.send();
}