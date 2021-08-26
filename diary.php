<?php

session_start();

?>

<html>
    <head>
        <title>Diary Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>

    <body>

    <a href="logout.php" style="font-size: 20px;
    float: right;
    margin: 13px;"> logout</a>
    <form action="store.php" method="post">
        <div class="form-group">
            <input type="text" style="width: 298px;
    display: block;
    margin: 16px;" name="slogan" class="form-control" id="slogan" required>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 18px">submit</button>
</form>
    </body>
</html>