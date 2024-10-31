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

        h4,
        h2 {
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

        .vote-count-item {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Ensures it fills the parent container */
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="card premium-card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Vote Completed Id Number</h4>
                    </div>
                    @foreach ($votecompleteid as $votecomplete)
                        <div class="card-body">
                            <div class="vote-count-item"
                                style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                <span class="text-center">{{ $votecomplete->id_number }}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
