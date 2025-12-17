        function isvalid(){
            var username = document.form.user.value;
            var password = document.form.pass.value;
            if(username.length == "" && password.length == ""){
                alert("Please enter your credentials");
                return false
            }
            else{
                if(username.length == ""){
                alert("Please enter your Email");
                return false
            }
            else{
                if(password.length == ""){
                alert("Please enter your Password");
                return false
            }
        }
    }
}