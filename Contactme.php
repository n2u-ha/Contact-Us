<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="Contactme.css">
    </head>

    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Please do contact with us to get offer on packages and travel to beautiful places
                    with your family and friends! May you have a nice and safe journey!
                </p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Taj Cassilina, 25 Gulshan Avenue, <br> Dhaka-1212, Bangladesh</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-phone'></i>
                        </div>
                        <div class="text">
                            <h3>Let's Talk</h3>
                            <p>+88001234567890</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="text">
                            <h3>General Support</h3>
                            <p>besttravelagency@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="#" method="POST">
                        <h2>Send Us Message</h2>
                        <div class="inputBox">
                            <input type="text" name="fname" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" required="required">
                            <span>Phone Number</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Type Your Message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="send" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>


<?php
if($_POST['send']){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO form values('$fname','$email','$phone','$message')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "Data Inserted into Database";
    }

    else{
        echo "Failed";
    }
}
?>