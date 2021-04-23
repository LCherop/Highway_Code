<!DOCTYPE html>
<html>
<head>
    <title>All Offenses</title>
</head>
<body>
    <table>
        <tr>
            <th>Offense Number</th>
            <th>Offense ID</th>
            <th>Description</th>
            <th>Fine</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($offences as $offence)
        <tr>
            <td>{{$offence->offenseNo}}</td>
            <td>{{$offence->offenseId}}</td>
            <td>{{$offence->description}}</td>
            <td>{{$offence->offenseFine}}</td>
            <td>{{$offence->created_at}}</td>
            <td>{{$offence->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>