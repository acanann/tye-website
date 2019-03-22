/**slideshow function, pictures change every 3 seconds*/

let slideIndex = 0;

function slideshow() {
    let i;
    let pictures = document.getElementsByClassName("tyePictures fade");
  
    if(pictures.length === 0){
        return;
    }
    for (i = 0; i < pictures.length; i++) {
        pictures[i].style.display = "none"; 
    }
    
    slideIndex++;
    
    if (slideIndex > pictures.length) {slideIndex = 1} 
    pictures[slideIndex-1].style.display = "block"; 
}

setInterval(slideshow, 3000); 

slideshow();

/**get weather using openweathermap api using fetch, return temp, convert from Kelvin to Farenheit*/

fetch('http://api.openweathermap.org/data/2.5/weather?id=5328163&APPID=e92dd02f81e946fd9e1efc2730f41b52')
  .then(function(response) {
    return response.json();
  })
  .then(function(myTemp) { 
    
    let newTemp = document.getElementById("temp")
    
    if (newTemp) {
        document.getElementById("temp").innerHTML = (myTemp.main.temp*(9/5)-459.67).toFixed(2) + " F";
    };
  });


