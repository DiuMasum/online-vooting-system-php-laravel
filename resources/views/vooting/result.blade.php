<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>General Election Results</title>
</head>

<body>

    <div class="container mt-5">
        <h4>President Vote Counts</h4>
        @foreach ($presidentVotes as $name => $count)
            <p>{{ $name }}: {{ $count }} votes</p>
        @endforeach

        <h4>Vice President Vote Counts</h4>
        @foreach ($vicePresidentVotes as $name => $count)
            <p>{{ $name }}: {{ $count }} votes</p>
        @endforeach

        <h4>General Secretary Vote Counts</h4>
        @foreach ($secretaryVotes as $name => $count)
            <p>{{ $name }}: {{ $count }} votes</p>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
