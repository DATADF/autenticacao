<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Received</title>
</head>
<body>

    <p>Message received from: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Subject: {{ $msg['subject'] }}</strong></p>
    <p><strong>Content: {{ $msg['content'] }}</strong></p>

</body>
</html>
