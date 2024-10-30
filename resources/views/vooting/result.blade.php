<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <title>General Election Results</title>
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row g-4">
            <h2 class="text-center mb-4 text-primary">Voting Results</h2>
            <!-- Section for President -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">President Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($presidentVotes as $name => $count)
                            <p class="d-flex justify-content-between">
                                <span> {{ $name }}</span>
                                <span class="badge bg-success text-white">{{ $count }} votes</span>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Section for Vice President -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-secondary text-white">
                        <h4 class="mb-0">Vice President Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($vicePresidentVotes as $name => $count)
                            <p class="d-flex justify-content-between">
                                <span> {{ $name }}</span>
                                <span class="badge bg-success">{{ $count }} votes</span>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>

            <h4>General Secretary Vote Counts</h4>
            @foreach ($secretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h4>Treasurer Vote Counts</h4>
            @foreach ($treasurerVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Joint Secretary Vote Counts</h4>
            <h5>For Afrahim Mozid</h5>
            @foreach ($firstjointsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For Mehedi Hasan Sarker</h5>
            @foreach ($secondjointsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For Tahsin Khalid Borno</h5>
            @foreach ($thirdjointsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For Nahid Hasan Sagor</h5>
            @foreach ($fourthjointsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Organising Secretary Vote Counts</h4>
            @foreach ($organisingsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h4>Office Secretary Vote Counts</h4>
            @foreach ($officesecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Legal, Social Service & Ethics Secretary Vote Counts</h4>
            <h5>For Nazmin Nahar Shanta</h5>
            @foreach ($legalsocialsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Broadcasting & Media Secretary Vote Counts</h4>
            <h5>For Sharmin Mahmud (Neza)</h5>
            @foreach ($broadcastingsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Education, Literature & Research Secretary Vote Counts</h4>
            <h5>For Fabiha Mahzabin Rahman</h5>
            @foreach ($educationsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h4>Sports & Cultural Secretary Vote Counts</h4>
            <h5>For Rabbi Al Yasin</h5>
            @foreach ($sportsculturalsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Publishing Secretary Vote Counts</h4>
            <h5>For Nusrat Zaman</h5>
            @foreach ($publishingsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Hosting Secretary Vote Counts</h4>
            <h5>For Jakia Sultana Sayma</h5>
            @foreach ($hostingsecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Assistant Organising Secretary Vote Counts</h4>
            <h5>For Mehedi Hasan</h5>
            @foreach ($assistantorganisingecretaryVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Assistant Treasurer Vote Counts</h4>
            @foreach ($assistanttreasurerVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach


            <h4>Executive Member Vote Counts</h4>
            <h5>For Emam Hossain Ridoy</h5>
            @foreach ($firstexecutivememberVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For Khadizatul Rima</h5>
            @foreach ($secondexecutivememberVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For Shihab Bari</h5>
            @foreach ($thirdexecutivememberVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach

            <h5>For SM Nahid Sarwar Sumon</h5>
            @foreach ($fourthexecutivememberVotes as $name => $count)
                <p>{{ $name }}: {{ $count }} votes</p>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
