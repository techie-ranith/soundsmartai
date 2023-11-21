
function sendmail()
{
  let parms ={
    name:document.getElementById("name").value,
    email : document.getElementById("email").value,
    message : document.getElementById("message").value,


  } 
  

  emailjs.send('service_jkufqib','service_jkufqib',parms).then(alert("Email Sent"));
}