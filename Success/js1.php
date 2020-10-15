<html>  
<head>  
<script type="text/javascript">  
function msg(){  
 alert("Hello Javatpoint");  
}  
function getcube(number){  
alert(number*number*number);  
}  
function getInfo(){  
return "hello javatpoint! How r u?";  
} <br>

 
</script>  
</head>  
<body>  
<p>Welcome to JavaScript</p>  
<form>  
<input type="button" value="Message" onclick="msg()"/> 
<input type="button" value="Cube" onclick="getcube(4)"/>
<script>  
document.write(getInfo());  
</script>  
<span id="txt"></span>  
<script>  
var today=new Date();  
document.getElementById('txt').innerHTML=today;  
</script> <br><br><br>




<script type="text/javascript">  
function msg(){  
var v= confirm("Are u sure?");  
if(v==true){  
alert("ok");  
}  
else{  
alert("cancel");  
}  
  
}  
</script>  
  
<input type="button" value="delete record" onclick="msg()"/>


<br><br>



<script type="text/javascript">  
function msg(){  
var v= prompt("Who are you?");  
alert("I am "+v);  
  
}  
</script>  
 



<input type="button" value="User" onclick="msg()"/>  

<br><br>


<script type="text/javascript">  
function msg(){  
setTimeout(  
function(){  
    //    Link to open 	open("https://www.javatpoint.com/window-object")
alert("Welcome to Javatpoint after 2 seconds")  
},2000);  
  
}  

</script>  
  
<input type="button" value="click" onclick="msg()"/>  
</form>  





<br><br>
<br><br>
<br><br>

<script type="text/javascript">  
function printvalue(){  
var name=document.form1.name.value;  
alert("Welcome  Mr "+name);  
}  
</script>  
  
<form name="form1">  
Enter Name:<input type="text" name="name"/>  
<input type="button" onclick="printvalue()" value="Show"/>  


</form>


<br><br>
<br><br>
<br><br>

<script type="text/javascript">  
function getcube(){  
var number=document.getElementById("number").value;  
alert(number*number*number);  
}  
</script>  
<form>  
Enter No:<input type="text" id="number" name="number"/><br/>  
<input type="button" value="cube" onclick="getcube()"/>  
</form> 





<br><br>
<br><br>
<br><br>



<script type="text/javascript">  
function totalelements()  
{  
var allgenders=document.getElementsByName("gender");  
alert("Total Genders:"+allgenders.length);  
}  
</script>  
<form>  
Male:<input type="radio" name="gender" value="male">  
Female:<input type="radio" name="gender" value="female">  
  
<input type="button" onclick="totalelements()" value="Total Genders">  
</form>  



<script type="text/javascript" >  
function showcommentform() {  
var data="Name:<input type='text' name='name'><br>Comment:<br><textarea rows='5' cols='80'></textarea>  <br><input type='submit' value='Post Comment'>";  document.getElementById('mylocation').innerHTML=data;  }  
</script>  
<form name="myForm">  
<input type="button" value="comment" onclick="showcommentform()">  
<div id="mylocation"></div>  
</form>



<br><br>
<br><br>
<br><br>


<script type="text/javascript" >  
function validate() {  
var msg;  
if(document.myForm.userPass.value.length>5){  
msg="good";  
}  
else{  
msg="poor";  
}  
document.getElementById('mylocation').innerText=msg;  
 }  
  
</script>  
<form name="myForm">  
<input type="password" value="" name="userPass" onkeyup="validate()">  
Strength:<span id="mylocation">no strength</span>  
</form>  


<br><br>
<br><br>
<br><br>


<script type="text/javascript">  
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.password2.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}  
</script>  
  
<form name="f1" action="register.jsp" onsubmit="return matchpass()">  
Password:<input type="password" name="password" /><br/>  
Re-enter Password:<input type="password" name="password2"/><br/>  
<input type="submit">  
</form> 




<br><br>
<br><br>
<br><br>




<script>  
function validate(){  
var name=document.f1.name.value;  
var password=document.f1.password.value;  
var status=false;  
  
if(name.length<1){  
document.getElementById("nameloc").innerHTML=  
" <img src='unchecked.gif'/> Please enter your name";  
status=false;  
}else{  
document.getElementById("nameloc").innerHTML=" <img src='checked.gif'/>";  
status=true;  
}  
if(password.length<6){  
document.getElementById("passwordloc").innerHTML=  
" <img src='unchecked.gif'/> Password must be at least 6 char long";  
status=false;  
}else{  
document.getElementById("passwordloc").innerHTML=" <img src='checked.gif'/>";  
}  
return status;  
}  
</script>  
  
<form name="f1" action="#" onsubmit="return validate()">  
<table>  
<tr><td>Enter Name:</td><td><input type="text" name="name"/>  
<span id="nameloc"></span></td></tr>  
<tr><td>Enter Password:</td><td><input type="password" name="password"/>  
<span id="passwordloc"></span></td></tr>  
<tr><td colspan="2"><input type="submit" value="register"/></td></tr>  
</table>  
</form>  






<br><br>
<br><br>
<br><br>




<input type="button" value="setCookie" onclick="setCookie()">  
<input type="button" value="getCookie" onclick="getCookie()">  
    <script>  
    function setCookie()  
    {  
        document.cookie="username=Arjun";  
    }  
    function getCookie()  
    {  
        if(document.cookie.length!=0)  
        {  
        alert(document.cookie);  
        }  
        else  
        {  
        alert("Cookie not available");  
        }  
    }  
    </script>  





<br><br>
<br><br>
<br><br>




      <select id="color" onchange="display()">  
                <option value="Select Color">Select Color</option>  
                <option value="lightblue">blue</option>  
                <option value="Cyen">cyen</option>  
                <option value="lightpink">Pink</option>  
            </select>  
            <script type="text/javascript">  
                function display()  
                {  
                    var value = document.getElementById("color").value;  
                    if (value != "Select Color")  
                    {  
                        document.bgColor = value;  
                        document.cookie = "color=" + value;  
                    }  
                }  
                window.onload = function ()  
                {  
                    if (document.cookie.length != 0)  
                    {  
                        var array = document.cookie.split("=");  
                        document.getElementById("color").value = array[1];  
                        document.bgColor = array[3];  
                    }  
                }  
              
                  
            </script>





<script language="Javascript" type="text/Javascript">  
    <!--  
    function mouseoverevent()  
    {  
        alert("This is JavaTpoint");  
    }  
    //-->  
</script>  
<p onmouseover="mouseoverevent()"> Keep cursor over me</p>  




<h2> Enter something here</h2>  
<input type="text" id="input1" onfocus="focusevent()"/>  
<script>  
<!--  
    function focusevent()  
    {  
        document.getElementById("input1").style.background=" aqua";  
    }  
//-->  
</script>  





</body>  
</html>