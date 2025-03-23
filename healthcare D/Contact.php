<?php
include('connect.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $query = mysqli_query($con , "INSERT INTO `contact`(`name`, `email`, `number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')");
}                        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us | Sahaj Hospital</title>
</head>
<body>
    <div class="container" id="container">
        <h1>Contact Sahaj Hospital</h1>
        <div class="form-container full-width">
            <form action="Contact.php" method="POST">
                <h2>Contact Us</h2>
                
                <span>Please provide your details to reach us.</span>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="number" placeholder="Phone Number" required>
                
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" placeholder="Subject of your message" required>
                
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" placeholder="Write your message here..." rows="6" required></textarea>

                <button type="submit" name="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
