<?php
include __DIR__ . "/../views/navigation.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>User Profile</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?php echo $loggedInUser->getEmail(); ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $loggedInUser->getName(); ?>">
                    </div>
                    <button type="button" class="btn btn-warning" id="cancelBtn" style="display: none;">Cancel</button>
                    <!-- Remove the Update button -->
                    <!-- Add the Save Changes button -->
                    <button type="button" class="btn btn-success" id="saveChangesBtn" style="display: none;">Save
                        Changes</button>
            </div>
            <div class="col-md-6">
                <div id="passwordFields" style="display: none;">
                    <!-- Password fields will be added dynamically -->
                </div>
                <button type="button" class="btn btn-primary" id="changePasswordBtn">Change Password</button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="deleteBtn">Delete Profile</button>
        <button type="submit" class="btn btn-secondary" name="logout">Logout</button>
        </form>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var nameField = document.getElementById('name');
        var saveChangesBtn = document.getElementById('saveChangesBtn');
        var cancelBtn = document.getElementById('cancelBtn');
        var changePasswordBtn = document.getElementById('changePasswordBtn');
        var passwordFields = document.getElementById('passwordFields');
        var originalNameValue = nameField.value;
        var deleteBtn = document.getElementById('deleteBtn');

        deleteBtn.addEventListener('click', function () {
            if (confirm("Are you sure you want to delete your profile?")) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'deleteUser');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            alert(response.message);
                            window.location.href = 'home';
                        } else {
                            alert(response.message);
                        }
                    } else {
                        alert('Failed to delete profile');
                    }
                };
                xhr.send('delete=1'); // Send the 'delete' parameter
            }
        });

        nameField.addEventListener('input', function () {
            saveChangesBtn.style.display = 'block';
            cancelBtn.style.display = 'block';
        });

        cancelBtn.addEventListener('click', function () {
            nameField.value = originalNameValue;
            hideSaveCancelButtons();
            document.getElementById('updateBtn').style.display = 'inline-block';
        });

        saveChangesBtn.addEventListener('click', function () {
            var nameFieldValue = nameField.value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'updateUserName');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        alert(response.message);
                    } else {
                        alert(response.message);
                    }
                } else {
                    alert('Failed to send update request');
                }
            };
            xhr.send('name=' + encodeURIComponent(nameFieldValue)); // Send only the name field for now
        });

        changePasswordBtn.addEventListener('click', function () {
            // Clear previous password fields if any
            passwordFields.innerHTML = '';
            // Create and append new password fields
            var oldPasswordField = document.createElement('div');
            oldPasswordField.classList.add('mb-3');
            oldPasswordField.innerHTML = '<label for="oldPassword" class="form-label">Old Password</label>' +
                '<input type="password" class="form-control" id="oldPassword" name="oldPassword">';
            passwordFields.appendChild(oldPasswordField);

            var newPasswordField = document.createElement('div');
            newPasswordField.classList.add('mb-3');
            newPasswordField.innerHTML = '<label for="newPassword" class="form-label">New Password</label>' +
                '<input type="password" class="form-control" id="newPassword" name="newPassword">';
            passwordFields.appendChild(newPasswordField);

            var confirmNewPasswordField = document.createElement('div');
            confirmNewPasswordField.classList.add('mb-3');
            confirmNewPasswordField.innerHTML = '<label for="confirmNewPassword" class="form-label">Confirm New Password</label>' +
                '<input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword">';
            passwordFields.appendChild(confirmNewPasswordField);

            // Display the password fields
            passwordFields.style.display = 'block';
        });

        function hideSaveCancelButtons() {
            saveChangesBtn.style.display = 'none';
            cancelBtn.style.display = 'none';
        }
        saveChangesBtn.addEventListener('click', hideSaveCancelButtons);
        cancelBtn.addEventListener('click', hideSaveCancelButtons);
    });

</script>

</html>

<style>
    .profile-container {
        display: flex;
        justify-content: space-between;
    }

    .profile-column {
        width: 45%;
    }
</style>