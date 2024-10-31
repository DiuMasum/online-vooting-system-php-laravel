<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>General Election</title>
    <style>
        body {
            background: rgb(4, 32, 66);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .voting-container {
            background-color: #fff;
            border-radius: 12px;
            padding: 2rem;
            max-width: 450px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .voting-container h2 {
            font-weight: bold;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 8px;
            font-size: 16px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #5a4de8, #7f85f3);
            font-weight: bold;
            border: none;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #7f85f3, #5a4de8);
        }
    </style>
</head>

<body>

    @php
        use Carbon\Carbon;

        // Set the voting start and end times in the Dhaka timezone
        $votingStartTime = Carbon::createFromFormat('d/m/Y H:i', '02/11/2024 06:00', 'Asia/Dhaka');
        $votingEndTime = Carbon::createFromFormat('d/m/Y H:i', '02/11/2024 15:00', 'Asia/Dhaka');
        $currentTime = Carbon::now('Asia/Dhaka');

        // Check if the current time is within the voting window
        $isVotingOpen = $currentTime->between($votingStartTime, $votingEndTime);
    @endphp

    <div class="container voting-container">
        <h2 class="text-primary">BIAS 2nd General Election 2024</h2>
        <h6 class="text-primary">Voting Time: {{ $votingStartTime->format('d/m/Y H:i a') }} -
            {{ $votingEndTime->format('H:i a') }}</h6>

        @if ($isVotingOpen)
            <!-- Voting is open -->
            <a href="{{ route('vooting') }}" class="btn btn-primary btn-lg w-100">Start Your Vote</a>
        @else
            <!-- Voting is not open yet, disable the button -->
            <button class="btn btn-secondary btn-lg w-100" disabled>Not open yet</button>
        @endif
    </div>









    {{-- <script>
        function checkID() {
            const idNumber = document.getElementById('id_number').value.trim();

            fetch("{{ route('validateID') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({ id_number: idNumber }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect_url;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
