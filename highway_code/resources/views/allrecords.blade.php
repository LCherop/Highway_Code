<!DOCTYPE html>
<html>
<head>
    <title>All Offenses</title>
</head>
<body>
    <h1>
    All Committed Offenses
    </h1>
    <table>
        <tr>
            <th>#</th>
            <th>Driver ID</th>
            <th>Officer ID</th>
            <th>Status</th>
            <th>Timestamps</th>
            <th>Timestamps</th>
        </tr>
        @foreach ($committedOffences as $committed_offense)
        <tr>
            <td>{{$committed_offense->co_ID}}</td>
            <td>{{$committed_offense->driverId}}</td>
            <td>{{$committed_offense->officerId}}</td>
            <td>{{$committed_offense->status}}</td>
            <td>{{$committed_offense->created_at}}</td>
            <td>{{$committed_offense->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>