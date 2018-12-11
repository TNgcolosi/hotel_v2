<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:b|Roboto:400i&effect=shadow-multiple" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
    <title>Holiday Form</title>
</head>
<body>

<?php include("functions.php"); ?>

<!-- Call functions that will add the user and save the booking -->
<?php 
isset($_POST['save']) ? add_user($_POST['firstname'], $_POST['lastname'], $_POST['email']) : "there is an error here ";

isset($_POST['hotels']) ? book_vacation() : "stay home";
?>

    <!-- Hotel login form     -->
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="special-card card" style="height:40rem;">
                    <h1 id="text">Hotel Reservations</h1>
                    <form name="hotelForm" method="post" action="">
                        <div class="form-group">
                            <label for="firstname"> First Name</label>
                            <input class="form-control form-control-sm" name="firstname" type="text" placeholder="Your name here...">
                        </div>
                            <div class="form-group">
                                <label for="lastname"> Last Name</label>
                                <input class="form-control form-control-sm" name="lastname"  type="text" placeholder="Your lastname here...">
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                    <div class="form-group">
                                        <p>Select your Hotel by clicking the dropdown menu below.</p>
                                        <div class="row">
                                            <div class="hotelselect col-lg-4">
                                                <div class="dropdown">

                                                    <!-- user selects hotel of choice -->
                                                    <button class="btn btn-secondary dropdown-toggle" value="displayHotelAndDayRate" 
                                                    name="hotels" type="button" id="dropdownMenuButton" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false">Select Hotel 
                                                    </button>
                                                    <div class="dropdown-menu" name="hotels" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#"  onclick="displayHotelAndDayRate(0)">Maldives</a>
                                                        <a class="dropdown-item" href="#"  onclick="displayHotelAndDayRate(1)">Bali</a>
                                                        <a class="dropdown-item" href="#"  onclick="displayHotelAndDayRate(2)">Thailand</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="pricedisplay col-lg-8">
                                                <p id="hotels"></p>
                                            </div>
                                    </div>
                                    <!-- User selects length of hotel stay -->
                                    <label for="days"> Duration of stay </label>
                                    <input class="form-control form-control-sm" name="days" type="number">
                                    <!-- button that displays users selection -->
                                    <button type="button" name="submit"  id="submit" onclick="validateForm(); displaySelectionAndPrice();" class="btn btn-secondary">Show booking</button>
                                    <!-- button that saves booking to the database -->
                                    <button type="submit" name="save" class="btn btn-secondary">Save Booking</button>
                    </form>
                </div>
            </div>
             
            <div class="col">
                <!-- This card displays booking details -->
                <div class="special-card card bottom-card" style="width:33rem; height:20rem;">
                    <h3>Booking Details</h3>
                    <p id="test"></p>
                </div>
            </div>
        </div>
    </div>
     


     
     
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>