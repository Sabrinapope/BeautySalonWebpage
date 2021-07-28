const text = [ "Services",
 "Contact", "Payment"];

for (let i of text  ) {
    console.log("document" + i )
}

//const contact = document.getElementsByClassName ('contact');
//const payment = document.getElementsByClassName('payment');
//const services = document.getElementsByClassName('services');

//const firstContact = contact[0];
//const secondPayment = payment[1];
//const thirdServices = services[2];

//const firstNameInput = document.getElementById('first-name');
//const lastNameInput = document.getElementById('lastNameInput');
//const submitForm = document.getElementById('submit-form');
//const text = document.getElementById('PaymentRequest');

//submitForm.addEventListener('click', () => {
// Text.textContext = 'form submited', + firstNameInput.value + '' + lastNameInput.value;


const contactList = document.getElementById("contact")
new URLSearchParams(windows.location.search.forEach((value, name) => {
    contactList.append(`${name}: ${value}`)
    contactList.append(document.createElement('br'))

    
          







var submitForm = document.getElementById("submit-form");
console.log(submitForm)
submitForm.addEventListener("click",() =>{
   console.log("hi");
 alert("form submited")
})
    
function myFunction() {
  document.getElementById("click").innerHTML = "Hello World";
}


//try {
    
//}
//catch(error){
    
//}
