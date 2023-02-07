window.onload = function () {

    var but1 = document.getElementById('but1'); 
    var block1 = document.getElementById('block1');

    but1.onmouseout = function(e) {
        block1.style.visibility="hidden";
        block1.style.opacity="0";
        block1.style.transition="visibility 0.3s,opacity 0.3s linear";
    }

    block1.onmouseout = function(e) {
        block1.style.visibility="hidden";
        block1.style.opacity="0";
        block1.style.transition="visibility 0.3s,opacity 0.3s linear";
    }

    but1.onmouseover = function(e) {
        block1.style.visibility="visible";
        block1.style.opacity="1";
        block1.style.transition="0.3s";
        block1.style.display="block";
        block1.style.position="absolute";
    };
    block1.onmouseover = function(e) {
        block1.style.visibility="visible";
        block1.style.opacity="1";
        block1.style.transition="0.3s";
        block1.style.display="block";
        block1.style.position="absolute";
    };

    var but2 = document.getElementById('but2'); 
    var block2 = document.getElementById('block2');

    but2.onmouseout = function(e) {
        block2.style.visibility="hidden";
        block2.style.opacity="0";
        block2.style.transition="visibility 0.3s,opacity 0.3s linear";
    }

    block2.onmouseout = function(e) {
        block2.style.visibility="hidden";
        block2.style.opacity="0";
        block2.style.transition="visibility 0.3s,opacity 0.3s linear";
    }

    but2.onmouseover = function(e) {
        block2.style.visibility="visible";
        block2.style.opacity="1";
        block2.style.transition="0.3s";
        block2.style.display="block";
        block2.style.position="absolute";

    };
    block2.onmouseover = function(e) {
        block2.style.visibility="visible";
        block2.style.opacity="1";
        block2.style.transition="0.3s";
        block2.style.display="block";
        block2.style.position="absolute";

    };
    

    $(function(){

        $(".dropdown-menu li a").click(function(){
    
          $(".title:first-child").text($(this).text());
          $(".title:first-child").val($(this).text());
    
       });
    
    });
  
    var btn0 = document.getElementById('btn0');
    var btn1 = document.getElementById('btn1');
    var loc1 = document.getElementById('loc1');
    var btn2 = document.getElementById('btn2');
    var loc2 = document.getElementById('loc2');
    var btn3 = document.getElementById('btn3');
    var loc3 = document.getElementById('loc3');
    var btn4 = document.getElementById('btn4');
    var loc4 = document.getElementById('loc4');
    var btn5 = document.getElementById('btn5');
    var loc5 = document.getElementById('loc5');
    var btn6 = document.getElementById('btn6');
    var loc6 = document.getElementById('loc6');
    var btn7 = document.getElementById('btn7');
    var loc7 = document.getElementById('loc7');

    btn0.onclick = function(e) {
        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none"; 

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn1.onclick = function(e) {
        loc1.style.visibility="visible";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="0.3s";
        loc1.style.display="block";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn2.onclick = function(e) {
        loc2.style.visibility="visible";
        loc2.style.opacity="0";
        loc2.style.opacity="1";
        loc2.style.transition="0.3s";
        loc2.style.display="block";
    
        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";       

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn3.onclick = function(e) {    
        loc3.style.visibility="visible";
        loc3.style.opacity="0";
        loc3.style.opacity="1";
        loc3.style.transition="0.3s";
        loc3.style.display="block";

        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn4.onclick = function(e) {
        loc4.style.visibility="visible";
        loc4.style.opacity="0";
        loc4.style.opacity="1";
        loc4.style.transition="0.3s";
        loc4.style.display="block";

        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn5.onclick = function(e) {
        loc5.style.visibility="visible";
        loc5.style.opacity="0";
        loc5.style.opacity="1";
        loc5.style.transition="0.3s";
        loc5.style.display="block";

        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn6.onclick = function(e) {
        loc6.style.visibility="visible";
        loc6.style.opacity="0";
        loc6.style.opacity="1";
        loc6.style.transition="0.3s";
        loc6.style.display="block";

        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc7.style.visibility="hidden";
        loc7.style.opacity="0";
        loc7.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc7.style.display="none";
    };

    btn7.onclick = function(e) {
        loc7.style.visibility="visible";
        loc7.style.opacity="0";
        loc7.style.opacity="1";
        loc7.style.transition="0.3s";
        loc7.style.display="block";

        loc1.style.visibility="hidden";
        loc1.style.opacity="0";
        loc1.style.opacity="1";
        loc1.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc1.style.display="none";

        loc2.style.visibility="hidden";
        loc2.style.opacity="0";
        loc2.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc2.style.display="none";

        loc3.style.visibility="hidden";
        loc3.style.opacity="0";
        loc3.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc3.style.display="none";

        loc4.style.visibility="hidden";
        loc4.style.opacity="0";
        loc4.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc4.style.display="none";

        loc5.style.visibility="hidden";
        loc5.style.opacity="0";
        loc5.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc5.style.display="none";

        loc6.style.visibility="hidden";
        loc6.style.opacity="0";
        loc6.style.transition="visibility 0.3s,opacity 0.3s linear";
        loc6.style.display="none";
    };
   
}