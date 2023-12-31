

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

var loginUsername=document.getElementById('loginUsername');


var loginPassword=document.getElementById('loginPassword');



var signupUsername=document.getElementById('signupName');
var Userregx=/^[a-z]{3,}/;
var signuPassword=document.getElementById('signupPassword');
var passwordregx =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

var signupEmail=document.getElementById('signupEmail');
var emailregx=/^[a-zA-Z0-9][\w.-]*@[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+$/;

var signupPhoneNumber=document.getElementById('signupPhoneNumber');
var phoneregx=/^(3|6)\d{7}$/

var signupAddress=document.getElementById('signupAddress');


function validatelogin()
{

if(loginUsername.value.trim()==""||loginPassword.value.trim()=="")
{
    if(loginUsername.value.trim()=="")
    {
    document.getElementById('loginUsernamespan').innerHTML="fill the above field"
        
    
    }
    if(loginPassword.value.trim()=="")
    {
    document.getElementById('loginpasswordspan').innerHTML="fill the above field"
    }
    return false;
}
else
{
    true;
}
}

function validatesignup()
{
    if(!Userregx.test(loginUsername)||!passwordregx.test(signuPassword)||!emailregx.test(signupEmail))
    {
        if(!Userregx.test(loginUsername))
        {
            document.getElementById('signupUsernamespan').innerHTML="username should have at least 3 letters in the beginning"
            
        }
        if(!passwordregx.test(signuPassword))
        {
            document.getElementById('signuppasswordspan').innerHTML=
            "At least 8 characters long.<br>Contains at least one lowercase letter.<br>Contains at least one uppercase letter.<br>Contains at least one digit.<br>Contains at least one special character from the specified set (@$!%*?&)."
        }

        if(!emailregx.test(signupEmail))
        {
            document.getElementById('signupemailspan').innerHTML="enter a valid email"
        }
        if(!phoneregx.test(signupPhoneNumber))
        {
            document.getElementById('signupphonespan').innerHTML="enter a valid phone number"
        }
        return false;
    }
    else
    {
        return true;
    }
}