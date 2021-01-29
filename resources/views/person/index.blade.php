<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{{$item->name}}}</td>
            <td>{{{$item->mail}}}</td>
            <td>{{{$item->age}}}</td>
            {{{$item->getData()}}}
        </tr>
    @endforeach
</table>

</body>
</html>
