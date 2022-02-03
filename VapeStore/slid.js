var counter = 1;

function next(){
    if(counter == 6){
        counter = 1;
    }
    else{
        counter++;
    }
    document.getElementById("slideshow").src = "sImages/" + counter + ".jpg";
}


function prev(){
    if(counter == 1){
        counter = 6;
    }
    else{
        counter--;
    }
    document.getElementById("slideshow").src = "sImages/" + counter + ".jpg";
}

setInterval(next , 2000);