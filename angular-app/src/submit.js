function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };
// created an account with EMAILJS but acc is prohibiting me from hosting smtp
// not delcared yet, unfunctional
  const serviceID = "YOUR_SERVICE_ID";
  const templateID = "YOUR_TEMPLETE_ID";

  emailjs.send(serviceID, templateID, params)
  .then(res=>{
      document.getElementById("name").value = "";
      document.getElementById("pname").value = "";
      document.getElementById("date").value = "";
      document.getElementById("inspection").value = "";
      document.getElementById("team").value = "";
      document.getElementById("enddate").value = "";
      document.getElementById("input_22_2").value = "";
      document.getElementById("input_22_3").value = "";
      document.getElementById("input_22_4").value = "";
      document.getElementById("input_17_2").value = "";
      document.getElementById("input_17_3").value = "";
      document.getElementById("input_17_4").value = "";
      document.getElementById("input_18_2").value = "";
      document.getElementById("input_18_3").value = "";
      document.getElementById("input_18_4").value = "";
      document.getElementById("input_19_2").value = "";
      document.getElementById("input_19_3").value = "";
      document.getElementById("input_19_4").value = "";
      document.getElementById("input_21_2").value = "";
      document.getElementById("input_21_3").value = "";
      document.getElementById("input_21_4").value = "";
      document.getElementById("label_9").value = "";
      document.getElementById("label_10").value = "";
      console.log(res);
      alert("Your message sent successfully!!")

  })
  .catch(err=>console.log(err));

}