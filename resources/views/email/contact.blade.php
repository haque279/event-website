<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="background: #333; color: #fff; padding: 10px; margin: 0 ">Contact from Happy Bangladesh website</h2>

<div class="" style="background: #ddd; padding: 10px; ">
    <p>Name: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Message: {{ $data->message }}</p>
    <br>
    <p>date: {{ $data->date }}</p>
</div>

</body>
</html>