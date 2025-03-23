<?php
include('connect.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $doctor=$_POST['doctor'];
  $datetime=$_POST['datetime'];
  $query = mysqli_query($con , "INSERT INTO `patient.information`(`name`, `number`, `email`, `doctor`, `datetime`) VALUES ('$name','$number','$email','$doctor','$datetime')");
}                        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .container {
            display: flex;
            width: 800px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            flex: 1;
            padding: 20px;
        }
        .form-section input, .form-section select, .form-section button {
            width: 100%;
            padding: 10px;
            padding-left: 5px;
            margin: 10px 0;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .form-section button {
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
        .info-section {
            flex: 1;
            background-color: #fbe9e9;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .info-section h2 {
            margin: 0;
            font-size: 24px;
            color: #000;
        }
        .info-section p {
            margin: 10px 0;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Form Section -->
        <div class="form-section">
            <form action="appointment.php" method="POST">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                
                <label for="mobile">Mobile No*</label>
                <input type="tel" id="number" name="number" placeholder="Enter your mobile number" required>
                
                <label for="email">Email Id*</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <label for="department">Select Department*</label>
                <select id="disease" name="doctor">
                
                           
                
                <optgroup label="physiotherapist">
                                <option value="Dr Neeta Shah">Dr. Neeta Shah</option>
                            </optgroup>
                            
                            <optgroup label="Gynecologist">
                                <option value="Dr Ashvin Mehta">Dr. Ashvin Mehta</option>
                            </optgroup>

                            <optgroup label="Pulmonology">
                                <option value="Dr Amit Bhatt">Dr. Amit Bhatt</option>
                            </optgroup>
                
                            <optgroup label="Orthopedics">
                            <option value="Dr Nirav Trivedi">Dr. Nirav Trivedi</option>
                            </optgroup>
                
                            <optgroup label="Pediatrics">
                                <option value="Dr Vinay Patel">Dr. Vinay Patel</option>
                            </optgroup>
                
                            <optgroup label="Neurology">
                                <option value="Dr Tejas Patel">Dr. Tejas Patel</option>
                            </optgroup>

                            <optgroup label="Skin Care">
                                <option value="Dr Mahesh Bhatiya">Dr. Mahesh Bhatiya</option>
                            </optgroup>
                
                        </select>

                <label for="date">Select Date*</label>
                <input type="date" id="date" name="datetime" required>
                
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <h2>BOOK AN APPOINTMENT</h2>
            <p>We are available 24/7 round the clock</p>
        </div>
    </div>

</body>
</html>
