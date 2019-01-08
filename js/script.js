// Most part created by Rodrigo Cordeiro
var uname=prompt("Hey, qual seu nome?");

function alerta(){
    if (uname == "Rodrigo"){
        text = "Bem vindo Mestre!!"
    } else if (uname == "13"){
        text = "Bem vindo Mestre!!"
    } else if (uname == "yah"){
    alert("Oi mozi :3") 
    text = "Bem vinda amor! Se achar algo errado me avisa. Te amo <3"
  } else if (uname == "yasmim"){
    alert("Oi mozi :3") 
    text = "Bem vinda amor! Se achar algo errado me avisa. Te amo <3"
  } else {
    alert("Hey " + uname + ','+"obrigado por visitar meu blog!!")
    text = "Bem vindo "+ uname+ "!!"
  }
}
alerta();
// Created by Tiyam Foyraz

//Open The navigation bar onclicking the hamburger button

function OpenNav(){
         document.getElementById("sidenav").style.width = "210px"; 
         document.getElementById("main").style.marginLeft = "210px"; 
         document.getElementById("sidenav").style.backgroundColor = "#404040"; 
         document.getElementById("b").classList.add("hide");
         document.getElementById("a").classList.remove("hide");
        }



//Close the navigation button on clicking the cross button.

function closeNav(){
      document.getElementById("sidenav").style.width = "0"; 
      document.getElementById("main").style.marginLeft = "0";  
      document.getElementById("b").classList.remove("hide");
      document.getElementById("a").classList.add("hide");
    }
    
// Created by Rod Cordeiro
function efeito(){
  document.getElementById("xXx").style.animation= "brisa 10s linear infinite";
  document.getElementById("xXx").style.color = "#" +(Math.random()*0xFFFFFF<<0).toString(16);
}

window.onload=function(){
    $(".desc").slideUp(0);
    $(".card").click(function(){
        var top = this.offsetTop;
        $("body").animate({
            scrollTop : (top - 75)
        }, 250);
        $(".desc").slideUp(250);
        $(".card").css({
            "boxShadow" : "none"
        });
        $(".cred").css({
            "background" : "#f2f2f2"
        });
        $(this).children().eq(0).css({
            "background" : "#FFF"
        });
        $(this).css({
            "boxShadow" : "0 2px 4px #111"
        });
        $(this).children().last().slideDown(250);
        
    });
};

function copia(){
    document.getElementById("x").classList.add("copia")
}
function cortar(){
    document.getElementById("xx").classList.add("cortar")
}
function cola(){
    document.getElementById("xxx").classList.add("cola")
}
function home(){
  document.getElementById("projeto").classList.add("none");  
  document.getElementById("home").classList.remove("none");
  document.getElementById("blog").classList.add("none");
  document.getElementById("yo").classList.add("none");
  document.getElementById('1').style.color="#fff";
  document.getElementById('2').style.color="#aaa";
  document.getElementById('3').style.color="#aaa";
  document.getElementById('4').style.color="#aaa";
}
function projetos(){
  document.getElementById("projeto").classList.remove("none");  
  document.getElementById("home").classList.add("none");
  document.getElementById("blog").classList.add("none");
  document.getElementById("yo").classList.add("none");
 document.getElementById('1').style.color="#aaa";
  document.getElementById('2').style.color="#fff";
  document.getElementById('3').style.color="#aaa";
  document.getElementById('4').style.color="#aaa";
}
function blog(){
  document.getElementById("projeto").classList.add("none");  
  document.getElementById("home").classList.add("none");
  document.getElementById("blog").classList.remove("none");
  document.getElementById("yo").classList.add("none");
document.getElementById('1').style.color="#aaa";
  document.getElementById('2').style.color="#aaa";
  document.getElementById('3').style.color="#fff";
  document.getElementById('4').style.color="#aaa";
}
function yo(){
  document.getElementById("projeto").classList.add("none");  
  document.getElementById("home").classList.add("none");
  document.getElementById("blog").classList.add("none");
  document.getElementById("yo").classList.remove("none");
  document.getElementById('1').style.color="#aaa";
  document.getElementById('2').style.color="#aaa";
  document.getElementById('3').style.color="#aaa";
  document.getElementById('4').style.color="#fff";
}

