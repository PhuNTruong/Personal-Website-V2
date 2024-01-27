<html>
<head>
  <script src="/javascript/nav.js"></script>
  <style>
    body{
        background: url("../images/stardewbg.jpg") no-repeat center center fixed;
        background-size: cover;
        font-family: stardewnorm;
        text-align:center;
    }
    </style>
</head>
<body>

  <!-- GET Or POST HTTP Method -->
  <form action="question.php" method="GET">
    <label for="uname">Enter your Username</label>
    <!-- The name (in this case it's uname) is important because this is what will carry over to the server -->
    <input type="text" placeholder="Enter your username" name="uname" required />
    <br />
    <label for="uname">Enter your Email</label>
    <!-- The name (in this case it's uname) is important because this is what will carry over to the server -->
    <input type="text" placeholder="Enter your email" name="uname" required />
    <br />
    <label for="pwd">Enter your Password</label>
    <input type="password" placeholder="Enter your password" name="pwd" required />
    <br />
    <label for="pwd">Enter your Password again</label>
    <input type="password" placeholder="Enter your password again" name="pwd2" required />

    <!-- This will call the form action -->
    <input type="submit" value="Login" />
  </form>
</body>

</html>