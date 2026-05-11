<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER -->
    <header>
        <h1>Student Registration</h1>
    </header>

    <!-- FORM CONTAINER -->
    <div class="container">

        <form method="POST">

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" required>
            </div>

            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact" required>
            </div>

            <div class="form-group">
                <label>Sex</label>
                <select name="sex" required>
                    <option value="">Select Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" required>
            </div>

            <div class="form-group">
                <label>Student Number</label>
                <input type="text" name="studentno" required>
            </div>

            <div class="form-group">
                <label>Course / Specialization</label>
                <input type="text" name="course" required>
            </div>

            <input type="submit" name="submit" value="Register" class="btn">

        </form>

<?php

if(isset($_POST['submit']))
{
    // var
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $studentno = $_POST['studentno'];
    $course = $_POST['course'];

    echo "<div class='output'>";

    echo "<h3>Student Information Output</h3>";

    echo "Full Name: " . ucwords($fullname) . "<br>";
    echo "Contact Number: $contact <br>";
    echo "Sex: $sex <br>";
    echo "Address: " . ucwords($address) . "<br>";
    echo "Age: " . number_format($age) . "<br>";
    echo "Student Number: $studentno <br>";
    echo "Course/Specialization: " . ucwords($course) . "<br><br>";

    echo "<b>String Formatting</b><br>";

    echo "Uppercase Name: " . strtoupper($fullname) . "<br>";

    echo "Lowercase Course: " . strtolower($course) . "<br>";

    echo "Proper Case Address: " . ucwords($address) . "<br>";

    echo "Character Count of Name: " . strlen($fullname) . "<br>";

    echo "</div>";
}

?>

    </div>
    <footer>
        <p>Contacts</p>
        <p>Email: ctamayo@fit.edu.ph</p>
        <p>Contact Number: 09272598044</p>
    </footer>

</body>
</html>