<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Booking Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="glowgj.png" />
    <link rel="stylesheet" href="Booking.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div id="preloader"></div>
    <video autoplay loop class="back-video" muted plays-inline>
        <source src="3D FOOTAGE _ NEON LIGHTS _ HD LOOP VIDEO.mp4" type="video/mp4">
    </video>
    <img src="undraw_blogging_vpvv.svg" alt="" class="image">
    <marquee width="50%" height="60px" direction="left" scrollamount="5">
        Book your events now and enjoy your exclusives events with full of joy and happiness without any interuptions!
     </marquee>
    <div class="container">
        <form action="Online.php" method="post">
        <form class="form-group">
            <div id="form">
                <h1>EVENT BOOKING FORM</h1>
                <div id="first-group">
                    <div id="content">
                        <input type="text" id="input-group" placeholder="Name" required>
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <input type="number" id="input-group" placeholder="Mobile Number" required>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <input type="text" id="input-group" placeholder="Arrival Date"required>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <input type="text" id="input-group" placeholder="Destination" required>
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <select id="input-group" style="background-color: black;" required>
                            <option value="">Total Guests</option>
                            <option value="">0 to 20</option>
                            <option value="">20 to 40</option>
                            <option value="">40 to 60</option>
                            <option value="">60 to 80</option>
                            <option value="">80 to 100</option>
                            <option value="">100+</option>
                        </select>
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div id="second-group">
                    <div id="content">
                        <input type="email" id="input-group" placeholder="E-Mail ID" required>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <select id="input-group" style="background-color: black;" required>
                            <option value="">Occasion</option>
                            <option value="">Corporate Event</option>
                            <option value="">Social Event</option>
                            <option value="">Virtual Event</option>
                            <option value="">Community Event</option>
                            <option value="">Fundraising Event</option>
                            <option value="">Festival Event</option>
                        </select>
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <input type="text" id="input-group" placeholder="Departure Date" required>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <select id="input-group" style="background-color: black;" required>
                            <option value="">Event Budget</option>
                            <option value="">5,000 to 10,000</option>
                            <option value="">10,000 to 30,000</option>
                            <option value="">40,000 to 60,000</option>
                            <option value="">70,000 to 100,000</option>
                            <option value="">300,000 +</option>
                        </select>
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                    </div>
                    <div id="content">
                        <input type="text" id="input-group" placeholder="Specific Needs.." required>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                    </div>  
                </div>
                <button type="submit" value="Submit" id="submit-btn">BOOK NOW</button>
            </div>
        </form>
    </div>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function(){
            loader.style.display = "none";
        })
    </script>
</body>
</html>