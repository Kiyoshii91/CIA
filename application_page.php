<!Doctype html>
    <head>
        <title> Main Imperial Intelligence Agency </title>
        <link rel="icon" type="image/png" href="images/MIAALogo.png">
        <link rel="stylesheet" href = "style.css">
</head>
<body class = "application-body">
  <div class = "container-reg">
                <h2 class = "title">Main Imperial Intelligence Agency</h2>
                <form action="starting_page.php" method="post">
                <div class = "user-details">
                <div class = "input-box">
                        <span class = "details">First Name</span>
                        <input type = "text" name = "FName" id = "F_name" placeholder="Given Name"  class = "Fname" required>
                </div>
                <div class = "input-box">
                        <span class = "details">Middle Name</span>
                        <input type = "text" name = "Mname" id = "M_name" placeholder="Middle Name" class = "Mname" required>
                </div>
                <div class = "input-box">
                        <span class = "details">Last Name</span>
                        <input type = "text" name = "LName" id = "L_name" placeholder="Last Name" class = "Lname" required>
                </div>
                <div class = "input-row">
                 <div class = "input-box">
                        <span class = "details">Birthdate</span>
                        <input type = "date" name = "birth_date" id = "b_date" placeholder="Birth_date" class = "bdate" required>
                    </div>
                 <div class = "input-box">
                        <span class = "details">Age</span>
                        <input type = "age" pattern = "[0-9]{2}" name = "age" id = "age" placeholder = "" class = "age" required>
                </div>
                </div>
                 <div class = "input-box">
                        <span class = "details">Email</span>
                        <input type = "email" name = "email" id = "email" placeholder="Email" class = "email" required>  
                </div>
                 <div class = "input-box">
                        <span class = "details">Phone Number</span>
                        <input type = "tel" name = "phone" pattern = "[0-9]{11}" id = "pnum" placeholder="09XXXXXXXXX" class = "pnum" required>
                </div>
                 <div class = "input-box">
                        <span class = "details"> Password</span>
                        <input type = "Password" name = "Password" id = "password" placeholder="Password" class = "pword" required>
                </div>
                  <div class = "input-box">
                        <span class = "details">Confirm Password</span>
                        <input type = "Password" name = "cPassword" id = "cpassword" placeholder="Confirm Password" class = "cpword" required>
                </div>
                <div class="input-box">
                    <span class="details">Gender</span>
                    <select name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
                        <button type = "submit"  name="Submit Application" class = "application-button">Submit Application</button>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>
