function home() {
     
     var sear = new XMLHttpRequest();
     
     sear.onreadystatechange=function () {
      if(sear.readyState==4 && sear.status==200){
          document.getElementById("homeBox").innerHTML = sear.responseText;
      }  
    };
     
     var allpic = document.getElementById("sell").value;
     sear.open("GET","homeall.php?y="+allpic,true);
     sear.send();
}