<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>General Election Results</title>
    <style>
        body {
            background: rgb(4, 32, 66);
            color: #495057;
        }
        .premium-card {
            background: #ffffff;
            border-radius: 8px;
            transition: box-shadow 0.3s ease;
            padding: 1rem;
        }
        .premium-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: linear-gradient(135deg, #6c757d, #343a40);
            color: #ffffff;
            border-radius: 8px 8px 0 0;
            padding: 0.75rem;
        }
        .badge {
            font-size: 1rem;
            padding: 0.5rem 0.75rem;
            background-color: #28a745;
            color: white;
        }
        h4, h2 {
            font-weight: bold;
        }
        h2.display-4 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #007bff;
        }
        .vote-count-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5">
        <h2 class="text-center mb-4 text-primary display-4">Voting Results</h2>
        <div class="row g-4">

             <!-- President Votes -->
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">President Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($presidentVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Vice President Votes -->
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Vice President Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($vicePresidentVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- General Secretary Votes -->
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">General Secretary Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($secretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Treasurer Votes -->
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Treasurer Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($treasurerVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Joint Secretary Votes --}}
            <div class="card-header text-center">
                <h4 class="mb-0">Joint Secretary Vote Counts</h4>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Afrahim Mozid</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($firstjointsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Mehedi Hasan Sarker</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($secondjointsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Tahsin Khalid Borno</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($thirdjointsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Nahid Hasan Sagor</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($fourthjointsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Organising Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Organising Secretary Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($organisingsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Office Secretary Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($officesecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Legal, Social Service & Ethics Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Legal, Social Service & Ethics Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Nazmin Nahar Shanta</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($legalsocialsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Broadcasting & Media Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Broadcasting & Media Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Sharmin Mahmud (Neza)</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($broadcastingsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- JEducation, Literature & Research Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Education, Literature & Research Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Fabiha Mahzabin Rahman</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($educationsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Sports & Cultural Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Sports & Cultural Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Rabbi Al Yasin</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($sportsculturalsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Publishing Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Publishing Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Nusrat Zaman</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($publishingsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Hosting Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Hosting Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Jakia Sultana Sayma</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($hostingsecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Assistant Organising Secretary Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center mb-2">
                        <h4 class="mb-0">Assistant Organising Secretary Vote Counts</h4>
                    </div>
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Mehedi Hasan</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($assistantorganisingecretaryVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Assistant Treasurer Votes --}}
            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Assistant Treasurer Vote Counts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($assistanttreasurerVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Executive Member Votes --}}
            <div class="card-header text-center">
                <h4 class="mb-0">Executive Member Vote Counts</h4>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Emam Hossain Ridoy</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($firstexecutivememberVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Khadizatul Rima</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($secondexecutivememberVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For Shihab Bari</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($thirdexecutivememberVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">For SM Nahid Sarwar Sumon</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($fourthexecutivememberVotes as $name => $count)
                        <div class="vote-count-item">
                            <span>{{ $name }}</span>
                            <span class="badge">{{ $count }} votes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>
