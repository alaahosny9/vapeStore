function login(){
    var username = document.logForm.emm.value;

    var password = document.logForm.psw.value;

    var labels = document.getElementsByTagName("label");

    var valid = true;

    if(username == ""){
        labels[0].innerHTML = "Email   * [required]";
        labels[0].style.color = "red";
        valid = false;
    }

    else{
        labels[0].innerHTML = "Email";
        labels[0].style.color = "black";
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    if(password == ""){
        labels[1].innerHTML = "Password   * [required]";
        labels[1].style.color = "red";
        valid = false;
    }

    
    else{
        labels[1].innerHTML = "Password";
        labels[1].style.color = "black";
        if(valid){
            valid = true;
        }
        else{
            valid = false;
        }
    }

    // if(valid == true){
    //     window.alert("Success! You Will be redirected to the Home Page");
    // }


    return valid;
}