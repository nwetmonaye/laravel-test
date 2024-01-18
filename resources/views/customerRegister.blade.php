<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    This is customer register page
    <hr>
    <form action="{{ url('postTest') }}" method="post">
        @csrf
        <button>Click to test</button>
    </form>
</body>

</html>
