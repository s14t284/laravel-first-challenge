<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size: 16pt; color: #999;}
        h1 {font-size: 100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
    </style>
</head>
<body>
    <h1>Blad/Index</h1>
    <p>{{$msg}}</p>
    @if(count($errors) > 0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        <tr><th>name:</th><td><input type="text" name="name"></td></tr>
        <tr><th>mail:</th><td><input type="text" name="mail"></td></tr>
        <tr><th>age:</th><td><input type="text" name="age"></td></tr>
        <tr><th></th><input type="submit" value="send" /></tr>
    </table>
    </form>
</body>
</html>
