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