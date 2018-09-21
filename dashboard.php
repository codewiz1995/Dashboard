<html lang="en">

<title> oDoc Dashboard </title>

<head>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="css/project.css">

<script type="text/javascript" src='js/dash.js'> </script>

<div>
    <img class="center" src="images/oDoc-Logo.png" alt="logo" width="20%">
</div>

</head>

<body onload="randomStringToInput(this)">

<div class="dashform" >
    <form action="dashboard.php" method="POST" align="center">
    <table border="5" width=450 class="regtable"><td> 
    &nbsp;&nbsp;<h2>Registration</h2><br>
    <label for="title">Title: </label>
        <select name="title">
                <option value="Mr">Mr.</option>
                <option value="Mrs">Mrs.</option>
                <option value="Ms">Ms.</option>
              </select> <br><br>
        <label for="inputfirstname">First name: </label>
        <input type="text" id="firstname" placeholder="Enter First name" name="firstname" required><br><br>
        <label for="inputlastname">Last name:</label>
        <input type="text" id="lastname" placeholder="Enter Last name" name="lastname" required><br><br>
        <label for="inputEmail">Email: </label>
        <input class="email" type="email" placeholder="Enter you email" id="email" placeholder="Enter Email" name="email" required><br><br>
        <label for="inputpassword">Password: </label>
        <input type="text" name="pass" disabled><br><br>
        <label for="Birthday">Birthday: </label>
        <input input type="text" class="datepicker" /><br><br>
        <label for="inputexp">Experience in years: </label><br>
        <input type="number" placeholder="Enter Experiance" name="experience" required id="experience"><br><br>
        <label for="inputexp">NIC: </label>
        <input type="text" placeholder="Enter NIC" name="nic" required id="nic"><br><br>
        <label for="inputEmail">Speciality: </label>
        <select name="speciality">
                <option value="psychiatrist">Addiction psychiatrist</option>
                <option value="Anesthesiologistt">Anesthesiologistt</option>
                <option value="Allergist">Allergist (immunologist)</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Hematologist">Hematologist </option>
              </select> <br><br>

        <button class="button" type="submit">Sign in</button><br><br>
      
        </td></table>
</div>

</body>
</html>