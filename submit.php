<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $course = htmlspecialchars($_POST['course']);
    $education = htmlspecialchars($_POST['education']);
    $skills = htmlspecialchars($_POST['skills']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);

    echo "
    <body style='font-family:Poppins, sans-serif; background:#f4f4f9; color:#333;'>
      <div style='max-width:700px; margin:50px auto; background:#fff; padding:30px; border-radius:12px; box-shadow:0 0 10px rgba(0,0,0,0.1);'>
        <h2 style='text-align:center; color:#3a7bd5;'>🎉 Registration Successful!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mobile:</strong> $mobile</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Course:</strong> $course</p>
        <p><strong>Education:</strong> $education</p>
        <p><strong>Skills:</strong> $skills</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>City:</strong> $city</p>
      </div>
    </body>";
}
?>
