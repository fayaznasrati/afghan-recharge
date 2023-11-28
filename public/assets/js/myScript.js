
function validate_phone(){
 var phone = document.getElementById('phone').value
 var conphone = document.getElementById('conPhone').value
 if(phone != conphone){
     document.getElementById('wrong_phone').innerHTML= '☒ Use Same Phone Number';
     document.getElementById('submitBtn').disabled = true;
     document.getElementById('wrong_phone').style.color ='red';
     document.getElementById('submitBtn').style.backgroundColor ='lightGray';
 }else{
     document.getElementById('wrong_phone').innerHTML ='🗹 Phone Number Matched';
     document.getElementById('submitBtn').disabled = false;
     document.getElementById('wrong_phone').style.color ='green';
     document.getElementById('submitBtn').style.backgroundColor ='#1c4b82';


 }
}
function checkFields() {
         if (document.getElementById('phone').value != "" &&
             document.getElementById('conPhone').value != "") {
             console.log("Your response is submitted");
         } else {
             console.log("Please fill all the fields");
         }
     }
// model scripts

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
