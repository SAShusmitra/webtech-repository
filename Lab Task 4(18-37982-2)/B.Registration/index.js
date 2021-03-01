
let gender = document.myForm.gen.value;

function validate(){

    if(document.myForm.Name.value=="")
    {
        document.getElementById("nameR").innerHTML="*Name Required";
    }

    if(document.myForm.Email.value=="")
    {
        document.getElementById("emailR").innerHTML="*Email Required";
    }

    if(document.myForm.UName.value=="")
    {
        document.getElementById("unameR").innerHTML="*User Name Required";
    }

    if(document.myForm.Pass.value=="")
    {
        document.getElementById("passR").innerHTML="*Password Required";
    }

    if(document.myForm.Cpass.value=="")
    {
        document.getElementById("CpassR").innerHTML="*Confirm Password Required";
    }

    if(gender==null)
    {
        document.getElementById("genderl").innerHTML="*Select a Gender";
    }

    if(document.myForm.dd.value=="" || document.myForm.mm.value=="" || document.myForm.yy.value=="")
    {
        document.getElementById("bdR").innerHTML="*Correct date Required"
    }

    if(document.myForm.Pass.value!=document.myForm.Cpass.value)
    {
        document.getElementById("CpassR").innerHTML="*Password and Confirm Password must be same";
    }



}