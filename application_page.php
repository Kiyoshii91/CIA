<!Doctype html>
    <head>
        <title> Main Imperial Intelligence Agency </title>
        <link rel="icon" type="image/png" href="images/MIAALogo.png">
        <link rel="stylesheet" href = "css/style.css">

        <link rel="stylesheet" href = "css/registrationformStyle.css">
</head>
<body class = "application-body">
  <div class = "container-reg">
                <h2 class = "title">Main Imperial Intelligence Agency</h2>
                <form name = "regForm" action = "application_page_script.php" method="post">
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
                        <input type = "date" name = "birth_date" id = "b_date" placeholder="YYYY/MM/DD" class = "bdate" onchange = "autoComputeAge()" required>
                    </div>
                 <div class = "input-box">
                        <span class = "details">Age</span>
                        <input type = "number" pattern = "[0-9]{2}" name = "age" id = "ageID" placeholder = "" class = "age" readonly>
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
                        <span class = "details">Username</span>
                        <input type = "username" name = "username" placeholder = "Username" class = "username" required>
                </div>
                 <div class = "input-box">
                        <span class = "details"> Password</span>
                        <input type = "Password" name = "password" id = "password" placeholder="Password" oninput = "autoValidatePassword()" class = "pword" required>
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
                <div class="input-box">
                    <span class="details">Branch</span>
                    <select id = "branch" name="branch" onchange = "showRanks()" required>
                        <option value="" disabled selected>Select Branch</option>
                        <option value="Army">Army</option>
                        <option value="PNP">PNP</option>
                        <option value="Civillian">Civillian</option>
                    </select>
                </div>
                 <div class="input-box">
                    <span class="details">Rank</span>
                    <select id = "rank" name = "rank"  required>
                            <option value="" disabled selected>Select Rank</option>
                    </select>
                </div>
            </div>
                        <button type = "submit"  name="submit" class = "application-button">Submit Application</button>
                    </div>
            </form>
        </div>
    </div>
    <script>
        function autoValidatePassword(){
                const passwordField = document.getElementById("password");
                const confirmPasswordField = document.getElementById("cpassword");
                const messageElement = document.getElementById("passwordMatch");

                if (passwordField.value === confirmPasswordField.value){
                        messageElement.textContent = "Password Match";
                        messageElement.style.color = "green";
                }else{
                        messageElement.textContent = "Password doesn't match";
                        messageElement.style.color = "red";
                }
        }
        function autoComputeAge(){
                const birthdateInput = document.getElementById("b_date").value;

                if (birthdateInput){
                        const birthdate = new Date(birthdateInput);
                        const today = new Date();

                        let age = today.getFullYear()- birthdate.getFullYear();
                        const monthDifference = today.getMonth() - birthdate.getMonth();

                        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthdate.getDate())){
                                age--;
                        }
                        document.getElementById("ageID").value = age;
                }else{
                        document.getElementById("ageID").value = '';
                }
        }
        function showRanks(){
                const branch = document.getElementById("branch").value;
                const rankSelect = document.getElementById("rank");
                rankSelect.innerHTML = '<option value="" disabled selected>Select Rank</option>';

                const ranks = {
                        Army: ["Private", "Private 1st Class", "Corporal", "Sergeant", "Staff Sergeant", "Technical Sergeant", "Master Sergeant", "Senior Master Sergeant", "Chief Master Sergeant", "First Chief Master Sergeant"],
                        PNP: ["PO1","PO2","PO3", "SPO1","SPO2","SPO3","SPO4",],
                        Civillian: ["None"]
                };
                if(branch === "Civillian"){
                        // rankSelect.disabled = true;
                        rankSelect.textContent = "None";
                }else{
                        rankSelect.disabled = false
                }

                if(ranks[branch]){
                        ranks[branch].forEach(rank => {const option = document.createElement("option");
                        option.value = rank;
                        option.textContent = rank;
                        rankSelect.appendChild(option);
                        });
                }
        }
    </script>
</body>

</html>
