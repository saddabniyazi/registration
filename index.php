<?php
$jsonFile = "data.json";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "name" => htmlspecialchars($_POST["name"]),
        "email" => htmlspecialchars($_POST["email"]),
        "mobile" => htmlspecialchars($_POST["mobile"]),
        "gender" => htmlspecialchars($_POST["gender"]),
        "course" => htmlspecialchars($_POST["course"]),
        "dob" => htmlspecialchars($_POST["dob"]),
        "address" => htmlspecialchars($_POST["address"]),
        "password" => htmlspecialchars($_POST["password"])
    ];

    if (file_exists($jsonFile)) {
        $jsonData = json_decode(file_get_contents($jsonFile), true);
    } else {
        $jsonData = [];
    }

    $jsonData[] = $data;
    file_put_contents($jsonFile, json_encode($jsonData, JSON_PRETTY_PRINT));

    echo "<div style='max-width:500px;margin:50px auto;padding:20px;background:#e9f4ff;border-radius:12px;box-shadow:0 0 10px rgba(0,0,0,0.1);font-family:Poppins,sans-serif;'>
            <h2 style='color:#0077cc;text-align:center;'>Registration Successful 🎉</h2>
            <p><b>Name:</b> {$data['name']}</p>
            <p><b>Email:</b> {$data['email']}</p>
            <p><b>Mobile:</b> {$data['mobile']}</p>
            <p><b>Gender:</b> {$data['gender']}</p>
            <p><b>Course:</b> {$data['course']}</p>
            <p><b>Date of Birth:</b> {$data['dob']}</p>
            <p><b>Address:</b> {$data['address']}</p>
          </div>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    body {
        background: linear-gradient(120deg, #0077cc, #66ccff);
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .form-container {
        background: #fff;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 350px;
        overflow-y: auto;
        max-height: 90vh;
    }
    h2 {
        text-align: center;
        color: #0077cc;
        margin-bottom: 25px;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 15px;
    }
    input:focus, textarea:focus {
        border-color: #0077cc;
        outline: none;
    }
    button {
        width: 100%;
        padding: 10px;
        background: #0077cc;
        border: none;
        color: white;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #005fa3;
    }
</style>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>
    <form id="regForm" method="POST" action="">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email ID" required>
        <input type="text" name="mobile" placeholder="10-digit Mobile No" maxlength="10" required>
        <select name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        <select name="course" required>
            <option value="" disabled selected>Select Course</option>
            <option>B.Tech</option>
            <option>B.Sc</option>
            <option>BCA</option>
            <option>MCA</option>
        </select>
        <input type="date" name="dob" required>
        <textarea name="address" placeholder="Enter Address" rows="3" required></textarea>
        <input type="password" name="password" placeholder="Create Password" required>
        <button type="submit">Register</button>
    </form>
</div>

<script>
$(document).ready(function() {
    $('#regForm').on('submit', function(e) {
        let mobile = $('input[name="mobile"]').val();
        if (!/^[0-9]{10}$/.test(mobile)) {
            alert('Please enter a valid 10-digit mobile number!');
            e.preventDefault();
        }
    });
});
</script>

</body>
</html>
