function valider(){
    var logins="admis";
    var passe="admis"
let login=document.forms["form1"]["login1"];
let pass=document.forms["form1"]["pass1"];
if(login.value ==logins && pass.value == passe){
    alert("connexion reussi");
}else alert("eureur de connexion ");
}