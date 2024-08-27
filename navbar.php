<?php include_once('connection.php') ?>
<?php include 'sentMail.php';?>
<?php  
 
if(isset($_POST['datasave'])) {
 $mailto = "hmawebdesign@hotmail.com";  //My email address
 //getting customer data
 $name = $_POST['aname']; //getting customer name
 $fromEmail = $_POST['aemail']; //getting customer email
 $phone = $_POST['aphone']; //getting customer Phome number
 $subject = $_POST['amessage']; //getting subject line from client
 $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
 
 //Email body I will receive
 $message = "Cleint Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Client Message: " . "\n" . $_POST['amessage'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['amessage'] . "\n\n"
 . "Regards," . "\n" . "- HMA WebDesign";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Justice - Law Firm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .appointment-form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        transform: translate(0%, -50%, 0%,-50%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: rgba(255,255,255,0.2);
        
        
    }

    .appointment-form h2 {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .appointment-form label {
        display: block;
        margin-bottom: 8px;
    }

    .appointment-form input[type="text"],
    .appointment-form input[type="email"],
    .appointment-form input[type="tel"],
    .appointment-form input[type="date"],
    .appointment-form input[type="time"],
    .appointment-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .appointment-form textarea {
        resize: vertical;
        height: 100px;
    }

    .appointment-form button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .appointment-form button[type="submit"]:hover {
        background-color: #45a049;
    }
    .aa{
        font-weight:bold;
    }
    </style>

<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siqddf0e8153f6816ce6906a652aef005dc1e48b5758e741226a88182fe91ad0700", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.php">
                                <h1 style="color:white;">Justice</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00am - 9:00pm</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>8552945385</h2>
                                <p>Call Us For Query</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a href="videosdk-rtc-javascript-sdk-example-main/index.php"><i class="fa-solid fa-video"></i></a>
                                <a href="login.php" style="text-decoration:none; font-size:15px;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Laws</a>
                            <a href="team.php" class="nav-item nav-link">Attorneys</a>
                            <a href="portfolio.php" class="nav-item nav-link">Case Studies</a>
                            <a href="professional lawyer.php" class="nav-item nav-link">Top lawyers</a>
                            <a href="Doctor-Appointment-System_PHP/Doctor-Appointment-System_PHP/dams/index.php" class="nav-item nav-link">Appointment</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#getappointment">
                                Give Review
                            </button>

                            <!-- Modal -->

                        </div>
                    </div>
                </nav>
                <div class="modal fade" id="getappointment" tabindex="-1" aria-labelledby="getappointment1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content"style="background-image:url(https://img.freepik.com/free-photo/vivid-blurred-colorful-background_58702-2655.jpg?size=626&ext=jpg); background-repeat:no-repeat; background-size:cover; opacity:0.85;" >
                            <div class="modal-header">
                                <h5 class="modal-title" id="getappointment1">Review Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="font-family: Arial, sans-serif;">
    


                                <div class="appointment-form">
                                    <h2>Your Review About this site</h2>
                                    <form action="save.php" method="POST">
                                        <label for="name" class="aa">Your Name:</label>
                                        <input type="text" id="aname" name="aname" required>

                                        <label for="email" class="aa">Your Email:</label>
                                        <input type="email" id="aemail" name="aemail" required>

                                        <label for="phone" class="aa">Your Phone:</label>
                                        <input type="tel" id="aphone" name="aphone" required>

                                        <label for="date" class="aa">your Experience On this site:</label>
                                        <input type="date" id="aappointmentdate" name="aappointmentdate" required>

                                        <label for="time" class="aa">Review:</label>
                                        <input type="time" id="aappointmenttime" name="aappointmenttime" required>

                                        <label for="message" class="aa">Message:</label>
                                        <textarea id="amessage" name="amessage" rows="4" required></textarea>

                                        <button type="submit" name="datasave">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>