<!DOCTYPE html>
<html>
<head>
    <title>Twitch Follower Viewer</title>
    <style type="text/css">
    body{
        background-color: #C7D4D2;
    }
    h1{
        font-size: 48px;
        text-align: center;
        color: #5E9DE6;
    }
    .center{
        text-align: center;
    }
    input{
        width: 100%;
        height: 30px;
        font-size: 25px;
    }
    button{
        height: 35px;
        font-size: 24px;
        width: 155px;
        background-color: #72F2E1;
        border-radius: 25px;
        border: 2px solid #72F2E1;
    }
    </style>
</head>
<body>
    <h1> Twitch Follower Viewer </h1>
    <hr />
    <div class="center">
    <form method="GET" action="view.php">
        <input type="text" id="name" name="name" placeholder="Username"><br /><br />
        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>
