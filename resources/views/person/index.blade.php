<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Mail</th>
        <th>Age</th>
        <th>data</th>
        <th>Board</th>
    </tr>
    @foreach ($hasItems as $item)
        <tr>
            <td>{{{$item->name}}}</td>
            <td>{{{$item->mail}}}</td>
            <td>{{{$item->age}}}</td>
            <td>{{{$item->getData()}}}</td>
            <td> @if($item->boards != null)
                    <table width="100%">
                        @foreach($item->boards as $board)
                            <tr>
                                <td>{{$board->getData()}}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </td>
        </tr>
    @endforeach
</table>

<div style="margin: 10px;"></div>
<table>
    <tr>
        <th>Person</th>
    </tr>
    @foreach($noItems as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
