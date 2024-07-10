<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>Name: {{ $details['username'] }}</p>
    <p>Email: {{ $details['usermail'] }}</p>
    <p>Subject: {{ $details['subject'] }}</p>
    <p>Message: {{ $details['body'] }}</p>
</body>
</html>
