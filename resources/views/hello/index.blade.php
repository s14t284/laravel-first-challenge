<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size: 16pt; color: #999;}
        th {background-color: #999999; color: #ffffff; padding: 5px 10px; }
        td {border: solid 1px #aaa; color: #999999; padding: 5px 10px; }
    </style>
</head>
<body>
    <h1>Blad/Index</h1>
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{{$item->name}}}</td>
                <td>{{{$item->mail}}}</td>
                <td>{{{$item->age}}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
