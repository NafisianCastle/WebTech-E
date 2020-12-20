 function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == null || username == "") {
                alert("Please enter the username.");
                return false;
            }
            if (password == null || password == "") {
                alert("Please enter the password.");
                return false;
            }
           // alert('Login successful');

        }

        $(document).ready(function() {
            $('#show_password').on('click', function() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');
                if (passwordField.val() != '') {
                    if (passwordFieldType == 'password') {
                        passwordField.attr('type', 'text');
                        $(this).text('Hide');
                    } else {
                        passwordField.attr('type', 'password');
                        $(this).text('Show');
                    }
                } else {
                    alert("Please Enter Password");
                }
            });
        });