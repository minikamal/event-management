<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css3/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/sign.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="get" class="register-form" id="register-form" action="reg_submit.php">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="nam" id="name" required/>
                            </div>
                            
                        </div>
                       
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Enter Enrollment Number :</label>
                            <input type="text" name="en_no" id="en_no" required/>
                        </div>
                        <div class="form-group">
                            <label for="Course">Enter Course :</label>
                            <input type="text" name="course" id="course">
                        </div>
                        <div class="form-group">
                            <label for="Branch">Enter Branch :</label>
                            <input type="text" name="branch" id="branch">
                        </div>
                        <div class="form-group">
                            <label for="Year">Enter year :</label>
                            <input type="text" name="yr" id="yr">
                        </div>
                        <div class="form-group">
                            <label for="mobile no">Enter mobile number :</label>
                            <input type="text" name="mob_no" id="mob_no">
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="_email" id="_email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>