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
<table>
    @if($items != null)
        @foreach($items as $item)
            <tr><th>id: </th><td>{{$item->id}}</td></tr>
            <tr><th>name: </th><td>{{$item->name}}</td></tr>
            <tr><th>mail: </th><td>{{$item->mail}}</td></tr>
            <tr><th>age: </th><td>{{$item->age}}</td></tr>
        @endforeach
    @endif
</table>
</body>
</html>
