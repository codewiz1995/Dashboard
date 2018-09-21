<html lang="en">

<title> oDoc Login </title>

<head>

<script>
function login(){
 var res = postData()
  .then(data => goToRegistration(data)) // JSON-string from `response.json()` call
  .catch(error => console.log(JSON.stringify(error)));
}

function goToRegistration(data){
    if(data.success){
        window.location = "dashboard.php";
        console.log("functn " +JSON.stringify(data));
        console.log("cookie" + data.cookie);
    }else{
        document.getElementById("outputDiv").innerHTML = "<h5>Invalid Credentials</h5>";
        showErrorPage(data);
    }
     
}


function showErrorPage(error){
    console.log("error " +JSON.stringify(error.error));
}

function postData() {

    var res =  fetch('https://ai.odoc.life/login', {
        method: "POST", // POST
        mode: "cors", 
        cache: "no-cache", 
        credentials: "same-origin", 
        headers: {
            "Content-Type": "application/json; charset=utf-8",
           
        },
        redirect: "follow", 
        referrer: "no-referrer", 
        body: JSON.stringify({ username: document.getElementById("user").value, password: document.getElementById("password").value}) // body data type must match "Content-Type" header
    })
    .then(response => response.json()); // parses response to JSON
    console.log("result :" + res);
    return res;
}
</script>

<link rel="shortcut icont" href="images/title.ico">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="css/project.css">

<script type="text/javascript" src='js/dash.js'> </script>

<div>
    <img class="center" src="images/oDoc-Logo.png" alt="logo" width="20%">
</div>

</head>

<body>


<div class="logform" >
<div id="outputDiv"></div>
    <table border="5" width=450 class="regtable"><td> 
    &nbsp;&nbsp;
        <label for="inputUsername">Username </label>
        <input class="text" id="user" type="text" placeholder="Enter you username" id="email" placeholder="Enter Email" name="email" required><br><br>
        <label for="inputpassword">Password: </label>
        <input class="password" id="password" type="password" placeholder="Enter you password" id="password" placeholder="Enter Password" name="password" required><br><br>
        <button class="button" onclick="login()"  type="submit" >Sign in</button><br><br>
        </td></table>
</div>

</body>
</html>