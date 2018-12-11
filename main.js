
//Variable declaration of hotels and day rates as arrays
var hotels = ["Maldives", "Bali", "Thailand"];
var dayRates = [1000, 900, 800];
var i = 0;

//function to validate form inputs, refreshes page if incorrect inputs are added
function validateForm() {
    var firstname = document.forms["hotelForm"]["firstname"].value;
    var lastname = document.forms["hotelForm"]["lastname"].value;
    var days = document.forms["hotelForm"]["days"].value;

    if (firstname == "" || lastname == "" || days < 1) {
        alert("First and/or Last name must be filled out and number of days must be greater than 0");
        document.location.reload(alert);
        

    } 
    
}

//function to display the hotel choice selected and the daily rate of that hotel
function displayHotelAndDayRate(x) {
        document.getElementById('hotels').innerHTML = hotels[x] + ' Hotel ' + dayRates[x] + ' per night, pps';
        
    i = x;
}

//function that displays a breakdown of hotel, daily rate, days and total price
function displaySelectionAndPrice() {



    var person = {
        firstName: document.forms["hotelForm"]["firstname"].value,
        lastName: document.forms["hotelForm"]["lastname"].value,   
    }

    var days = document.forms["hotelForm"]["days"].value;
    var total = dayRates[i] * days;

    document.getElementById('test').innerHTML =
    "Congratulations " + person['firstName'] + " " + person['lastName'] + " !! <br> You are booking " + hotels[i] + 
    " Hotel. <br> Number of days: " + days + " <br>Daily Rate: R" + dayRates[i] + "pps <br>Total: " + total +
    '   <button type="button" class="btn-outline-secondary float-right"> Go to Checkout </button>';
    }
