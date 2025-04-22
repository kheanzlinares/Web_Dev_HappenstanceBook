<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Good Read's user registration
                    </div>
                    <div class="card-body">
                        <?php if (isset($errorMessage)): ?>
                            <div class="alert alert-danger" role="alert">

                                <?php echo $errorMessage; ?>

                            </div>
                        <?php endif; ?>
                        <form action="register" method="POST" id="registrationForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback" id="emailErrorFeedback" style="display: none;">
                                    Please enter a valid email address containing '@'
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="invalid-feedback" id="passwordErrorFeedback" style="display: none;">
                                    Password must be at least 8 characters long, contains at least one lowercase and
                                    uppercase letter, and one digit
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    required>
                                <div class="invalid-feedback" id="passwordMismatchFeedback" style="display: none;">
                                    Passwords do not match.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="registerButton">Register</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Already have an account? <a href="login">Login</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirmPassword");
        var emailInput = document.getElementById("email");
        var passwordMismatchFeedback = document.getElementById("passwordMismatchFeedback");
        var emailErrorFeedback = document.getElementById("emailErrorFeedback");
        var passwordErrorFeedback = document.getElementById("passwordErrorFeedback");
        var registerButton = document.getElementById("registerButton");

        function validatePasswords() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordMismatchFeedback.style.display = "block";
            } else {
                passwordMismatchFeedback.style.display = "none";
                confirmPasswordInput.setCustomValidity("");
            }
        }

        function validateEmail() {
            var email = emailInput.value;
            if (email.indexOf("@") === -1) {
                emailErrorFeedback.style.display = "block";
            } else {
                emailErrorFeedback.style.display = "none";
                emailInput.setCustomValidity("");
            }
        }

        function validatePassword() {
            var password = passwordInput.value;
            var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if (!passwordRegex.test(password)) {
                passwordErrorFeedback.style.display = "block";
            } else {
                passwordErrorFeedback.style.display = "none";
                passwordInput.setCustomValidity("");
            }
        }

        emailInput.addEventListener("blur", validateEmail);
        passwordInput.addEventListener("input", validatePasswords);
        confirmPasswordInput.addEventListener("input", validatePasswords);
        passwordInput.addEventListener("blur", validatePassword);

        // Optional: Disable form submission until all inputs are valid
        registerButton.addEventListener("click", function (event) {
            if (!emailInput.checkValidity() || !passwordInput.checkValidity() || !confirmPasswordInput.checkValidity()) {
                event.preventDefault();
            }
        });
    });
</script>

</html>