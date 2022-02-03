function validation(){
    var valid = true;

    var labels = document.getElementsByTagName("label");

    var fName = document.regForm.fName.value;

    var lName = document.regForm.lName.value;

    var email = document.regForm.email.value;

    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var password = document.regForm.psw.value;

    var passwordd = document.regForm.pswRepeat.value;

    if(fName == ""){
        labels[0].innerHTML = "First Name   * [required]";
        labels[0].style.color = "red";
        valid = false;
    }
    else if(!isNaN(fName)){
        labels[0].innerHTML = "First Name   * [Text Please]";
        labels[0].style.color = "red";
        valid = false;
    }
    else{
        labels[0].innerHTML = "First Name";
        labels[0].style.color = "black";
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    if(lName == ""){
        labels[1].innerHTML = "Last Name   * [required]";
        labels[1].style.color = "red";
        valid = false;
    }
    else if(!isNaN(lName)){
        labels[1].innerHTML = "Last Name   * [Text Please]";
        labels[1].style.color = "red";
        valid = false;
    }
    else{
        labels[1].innerHTML = "Last Name";
        labels[1].style.color = "black";        
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    if(email == ""){
        labels[2].innerHTML = "Email   * [required]";
        labels[2].style.color = "red";
        valid = false;
    }
    else if(!regex.test(email)){
        labels[2].innerHTML = "Email   * [Incorrect Email]";
        labels[2].style.color = "red";
        valid = false;
    }
    else{
        labels[2].innerHTML = "Email";
        labels[2].style.color = "black";        
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    if(password == ""){
        labels[3].innerHTML = "Password   * [required]";
        labels[3].style.color = "red";
        valid = false;
    }
    else if(password.length < 8){
        labels[3].innerHTML = "Password   * [Must be > 8]";
        labels[3].style.color = "red";
        valid = false;
    }
    else{
        labels[3].innerHTML = "Password";
        labels[3].style.color = "black";        
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }


    if(passwordd == ""){
        labels[4].innerHTML = "Repeat Password   * [required]";
        labels[4].style.color = "red";
        valid = false;
    }
    else if(passwordd != password){
        labels[4].innerHTML = "Repeat Password   * [Password doesnot match]";
        labels[4].style.color = "red";
        valid = false;
    }
    else{
        labels[4].innerHTML = "Repeat Password";
        labels[4].style.color = "black";        
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    // if(valid == true){
    //     window.alert("Success! You Will be redirected to the Login Page");
    // }

    return valid;
}