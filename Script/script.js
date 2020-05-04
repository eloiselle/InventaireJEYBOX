
function validate(){
  
}

function confirmMail(){
  var tocheck = document.getElementById('txtmail');
  var model = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;

  if(!tocheck.value.match(model))
  {
    tocheck.innerHTML="";
    tocheck.reset();
    alert("Entrée invalide. Le résultat attendu est: exemple@hotmail.com");
  }
}

function confirmPass(){
  var tocheck = document.getElementById('txtconfirm');
  var model = document.getElementById('txtpassword');

  if(!tocheck.value.match(model))
  {
    tocheck.reset();
    alert("Les mots de passes fournis ne sont pas identique");
  }
}
