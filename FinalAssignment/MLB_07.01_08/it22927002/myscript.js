function profile_name(){
x=document.getElementById('fname').innerHTML;
y=document.getElementById('lname').innerHTML;
document.write(x+y);
document.getElementById('profile_name').innerHTML;
}
   
var urlParams = new URLSearchParams(window.location.search);
var username = urlParams.get('username');
console.log(username);