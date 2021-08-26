<html>

<head>
    <title>Secret Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<div class="container">
    <div class="login-box signup">
    <div class="row">
        <div class="col-md-6">
            <h2>Secret Diary</h2>
            <h6 style="margin-top: 12px;">Store your thoughts permanently and securely</h6>
            <p style="margin-top: 19px;">Interested? Signup here</p>
            <form action="register.php" method="post">
                <div class="form-group"  style="margin-top: 12px;">
                    <input type="email" name="email" class="form-control" placeholder="Your email" id="email" required>
                </div>
                <div class="form-group"  style="margin-top: 12px;">
                    <input type="password" name="password" placeholder="Your password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary" style="display:block; margin-left: 160px; margin-top: 12px;">Signup</button><br>
                <a href="login.php">Log In</a>
            </form>
        </div>
        </div>
    </div>
</div>
</body>
</html>