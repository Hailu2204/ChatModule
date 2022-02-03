<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div id="chatbox">
        <h1>CHAT HERE</h1>
        <div class="chatarea">
            <div id="chat"></div>
            <form method="POST" id="formid">
                <textarea name="message" cols="30" rows="10" class="materialize-textarea"></textarea>
            </form>
        </div>
    </div>



    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../js/jquerry.js"></script>
</body>
</html>