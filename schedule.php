<?php 
if(isset($_POST['submit'])){
    $to = "Thestarflowerclinic@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Schedule Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
   
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>Star Flower Clinic | Schedule</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Noto+Sans:ital@0;1&display=swap" rel="stylesheet">
    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="starflower logo">
        </div>
        <div class="right">
            <div class="contact">
                <p class="hideMob">Call us Today at (815) . 208 . 7703
                    <a href="https://www.facebook.com/StarFlowerClinic/" target="_blank"><img src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-facebook-4.png&r=66&g=103&b=178" alt="facebook logo" class="fblogo"></a>
                </p>
            </div>
            <div class="nav">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="services.html">Services</a>
                <a href="schedule.php" style="color: #5061a8;">Schedule</a>
                <a href="#contact">Contact Us</a>
                <a href="#FAQ">FAQ</a>
            </div>

        </div>

    </header>

    <main>
        <div class="topnav" style="text-transform: uppercase;">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div id="myLinks">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="services.html">Services</a>
                <a href="schedule.php" style="color: #5061a8;">Schedule</a>
                <a href="#contact">Contact Us</a>
                <a href="#FAQ">FAQ</a>
            </div>
        </div>

        <div class="about-title">
            <img src="img/Taron-dr.jpg" alt="inside">
            <h1>SCHEDULE</h1>
        </div>

        <div class="schedule-main">
            <div class="schedule-table1">
                <table class="tab1">
                    <tr>
                        <th>Schedule goes here</th>
                        <th>Schedule goes here</th>
                    </tr>
                    <tr>
                        <th>Schedule goes here</th>
                        <th>Schedule goes here</th>
                    </tr>
                    <tr>
                        <th>Schedule goes here</th>
                        <th>Schedule goes here</th>
                    </tr>
                    <tr>
                        <th>Schedule goes here</th>
                        <th>Schedule goes here</th>
                    </tr>
                </table>

            </div>

            <div class="schedule-table2">
                <table class="tab2">
                    <tr>
                        <th class="head">STEP 1</th>
                        <th class="head">STEP 2</th>
                        <th class="head">STEP 3</th>
                    </tr>
                    <tr>
                        <th class="head2">Gather your</th>
                        <th class="head2">Schedule</th>
                        <th class="head2">Establish a relationship</th>
                    </tr>
                    <tr>
                        <th class="cont">
                            <ul>
                                <li>Driver's License/ State ID</li>
                                <li>2 pieces of mail from your current address</li>
                                <li>Benefit Verification Letter(SSI/SSDI applicants) / DD214 Form(Veterans)</li>
                                <li>Recent medical records<br><a href="services.html#il-residents" class="linkCont">Click here for a list of qualifying conditions</a></li>
                            </ul>
                        </th>
                        <th class="cont">
                            <ul>
                                <li>After seeing our cannabis-friendly doctor, we will submit your application free of charge and within 48 hours, you will be able to go to the dispensary of your choosing.</li>
                            </ul>
                        </th>
                        <th class="cont">
                            <ul>
                                <li>Call (815) 208-7703 to make your appointment to schedule a visit with our cannabis friendly doctor.</li>
                            </ul>
                        </th>

                    </tr>
                </table>




            </div>

            <div class="schedule-table3">
                <p class="para-head">Preparing for your clinic visit</p>
                <div class="actual-table">
                    <p>Content goes here</p>
                    <p>Content goes here</p>
                    <p>Content goes here</p>
                </div>
            </div>

            <div class="form-Email">
                <p>Schedule a meeting</p>
                <form action="" method="post">
                    First Name<br> <input type="text" name="first_name" required><br> Last Name<br> <input type="text" name="last_name" required><br>                    Email <br><input type="text" name="email" required><br> Message
                    <br><textarea rows="5" name="message" cols="30" required></textarea><br>
                    <input type="submit" name="submit" value="Submit" >
                </form>
            </div>



        </div>


        <footer>
            <div class="footNav ">
                <div class="inform ">
                    <a href="services.html" class="footTitle " style="color: #181b30; text-decoration: none; "><span class="mobOnly ">&gt </span>INFORMATION</a><br class="hideMob ">
                    <a href="about.html " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">About Us</a><br class="hideMob ">
                    <a href="#starflower " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Why Star Flower?</a><br class="hideMob ">
                    <a href="#FAQs " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">FAQs</a><br class="hideMob ">
                    <a href="#contact " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Contact Us</a><br class="hideMob ">
                </div>
                <div class="servicesNav ">
                    <a href="services.html " class="footTitle " style="color: #181b30; text-decoration: none; "><span class="mobOnly ">&gt </span>SERVICES</a><br class="hideMob ">
                    <a href="services.html#il-residents " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Illinois Residents</a><br class="hideMob ">
                    <a href="services.html#io-residents " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Iowa Residents</a><br class="hideMob ">
                    <a href="services.html#minors " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Minors</a><br class="hideMob ">
                    <a href="services.html#terminal " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Terminal Illnesses</a><br class="hideMob ">
                </div>
                <div class="locationNav ">
                    <a href="https://www.google.com/maps/dir//Star+Flower+Clinic,+1008+4th+St,+Fulton,+IL+61252/@41.8668258,-90.2010038,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x87e2633db2ab8a7b:0xaca82a0e5a330776!2m2!1d-90.1657955!2d41.8667681!3e0" class="footTitle " style="color: #181b30; text-decoration: none; "><span class="mobOnly ">&gt </span><span class="hideMob1 ">OUR </span>LOCATION</a><br class="hideMob ">
                    <a href="https://www.google.com/maps/dir//Star+Flower+Clinic,+1008+4th+St,+Fulton,+IL+61252/@41.8668258,-90.2010038,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x87e2633db2ab8a7b:0xaca82a0e5a330776!2m2!1d-90.1657955!2d41.8667681!3e0" class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Directions</a><br class="hideMob ">
                </div>
                <div class="contactsNav ">
                    <a href="#contact " class="footTitle " style="color: #181b30; text-decoration: none; "><span class="mobOnly ">&gt </span>OUR CLINIC</a><br class="hideMob ">
                    <a href="#contact " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Star Flower Clinic<br> 1008 4th Street<br> Fulton, Illinois 61252<br> Phone: 815.208.7703</a><br class="hideMob ">
                    <br>
                    <a href="mailto:StarFlowerWellness@gmail.com" target="_blank " class="footContent hideMob " style="color: #181b30; text-decoration: none; ">Email: StarFlowerWellness@gmail.com</a><br class="hideMob ">


                </div>
            </div>
            <div class="info ">
                <div class="left-img ">
                    <a href="https://www.facebook.com/StarFlowerClinic/ " target="_blank "><img src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-facebook-4.png&r=0&g=0&b=0 " alt="facebook logo "></a>
                </div>
                <div class="left-text ">
                    <p>Call us today at (815) . 208 . 7703<br> Clinics: Wednesday and Saturday</p>
                </div>


                <div class="copyright ">
                    <p>Copyright Star Flower | Site by <a href="https://www.augustana.net/webguild/ " target="_blank " style="text-decoration: none; color : #181b30; ">Augustana Web Guild</a></p>
                </div>
            </div>


        </footer>

    </main>





</body>




</html>