<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>User Login</title>
</head>

<body>
    <form>
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" id="email">
        </div>
    </form>
    @vite(['resources/js/app.js'])
</body>

</html>
