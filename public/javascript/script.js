function toggle(its,that)
{
  var a  = document.getElementById(its);
  var tha = document.getElementById(that)
  console.log(tha);
  if(a.style.display == "block")
    {
      a.style.display = "none";
      tha.style.display = "block";
    }
}

function show(th)
{
 var a  = document.getElementById(th);
  
  if(a.style.display == "none")
    {
      a.style.display = "block";
   
        
    }else
      {
        a.style.display = "none";
     
      }
}

function show1(th,tha,thi,chi)
{
  var x = document.getElementById(th);
  var y = document.getElementById(tha);
  var z = document.getElementById(thi);
  var u = document.getElementById(chi);
  if(x.style.display == "none")
    {
      x.style.display  = "block";
      y.style.display = "none";
      z.style.display = "none";
      u.style.display = "none";
    }else {
      x.style.display = "none";
    }
  
}

function logout() {
    var a = document.getElementById("hide");
  var b = document.getElementById("asd");
  if(a.style.display == "none")
    {
      a.style.display = "block";
      a.style.visibility = "visible";
    }else {
      a.style.display = "none"
    }
}

//window.onclick = function(event){
//      var a = document.getElementById("id01");
////    alert(event.target)
//    if(event.target == a)
//        {
////            alert(222)
//            a.style.d != "nonei{splay = "none";
//        }}
//}
