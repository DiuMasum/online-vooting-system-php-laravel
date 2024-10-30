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
        .hover-bg {
            background: white;
            transition: background 0.3s;
            /* Smooth transition */
        }

        .hover-bg:hover {
            background: white;
            /* Change background on hover */
            color: black;
            /* Change text color for contrast */
        }

        .hover-bg-sm {
            background: white;
            /* Change background on hover */
            color: black;
            /* Change text color for contrast */
        }

        .small-img {
            width: 80px;
            height: auto;
        }
    </style>


</head>

<body style="background: rgb(4, 32, 66);">

    <!-- voting-form.blade.php -->

    <div class="container mt-5">
        <h2 class="text-center mb-4 text-white">Vote for Your Favorite Candidate</h2>

        <form action="{{ route('vootingstore') }}" method="POST" class="mx-auto" style="max-width: 750px;">
            @csrf

            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    President</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-president" type="checkbox"
                                    name="president[]" id="first_president" value="first_president">
                                <h5 class="card-title px-3">Sibbir Ahmed</h5>
                            </div>
                            <img src="{{ asset('image/lion.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-president" type="checkbox"
                                    name="president[]" id="second_president" value="second_president">
                                <h5 class="card-title px-3">Tuhin Kalimullah</h5>
                            </div>
                            <img src="{{ asset('image/tiger.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="form-group mb-3">
            <label class="form-label d-block h5">President:</label>
            <div class="form-check">
                <input class="form-check-input candidate-checkbox-president" type="checkbox"
                       name="president[]" id="first_president" value="first_president">
                <label class="form-check-label" for="first_president">Sibbir Ahmed</label>
            </div>

            <div class="form-check">
                <input class="form-check-input candidate-checkbox-president" type="checkbox"
                       name="president[]" id="second_president" value="second_president">
                <label class="form-check-label" for="second_president">Tuhin Kalimullah</label>
            </div>
        </div> --}}

            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position: Vice
                    President</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="first_vice_president" value="first_vice_president">
                                <h5 class="card-title px-3">Abir Hossain Talukder</h5>
                            </div>
                            <img src="{{ asset('image/ship.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="second_vice_president" value="second_vice_president">
                                <h5 class="card-title px-3">Farhana Islam Tamanna</h5>
                            </div>
                            <img src="{{ asset('image/rickshaw.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="third_vice_president" value="third_vice_president">
                                <h5 class="card-title px-3">Md Mizanur Rahman</h5>
                            </div>
                            <img src="{{ asset('image/train.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="fourth_vice_president" value="fourth_vice_president">
                                <h5 class="card-title px-3">Muhammad Jubayer Hossain</h5>
                            </div>
                            <img src="{{ asset('image/helicopter.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="fifth_vice_president" value="fifth_vice_president">
                                <h5 class="card-title px-3">Sadiul Islam Hridoy</h5>
                            </div>
                            <img src="{{ asset('image/rocket.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="sixth_vice_president" value="sixth_vice_president">
                                <h5 class="card-title px-3">Md Nazmul Hasan Sarker</h5>
                            </div>
                            <img src="{{ asset('image/truck.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="seven_vice_president" value="seven_vice_president">
                                <h5 class="card-title px-3">Muneem Mahidee</h5>
                            </div>
                            <img src="{{ asset('image/motorcycle.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    General Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input secretary-checkbox-president" type="checkbox"
                                    name="secretary[]" id="first_secretary" value="first_secretary">
                                <h5 class="card-title px-3">Fakhrul Islam Prangon</h5>
                            </div>
                            <img src="{{ asset('image/shark.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input secretary-checkbox-president" type="checkbox"
                                    name="secretary[]" id="second_secretary" value="second_secretary">
                                <h5 class="card-title px-3">Zayed Bin Naser</h5>
                            </div>
                            <img src="{{ asset('image/whale.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Treasurer</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-treasurer" type="checkbox"
                                    name="treasurer[]" id="first_treasurer" value="first_treasurer">
                                <h5 class="card-title px-3">Abdullah Al Monsur</h5>
                            </div>
                            <img src="{{ asset('image/coin.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-treasurer" type="checkbox"
                                    name="treasurer[]" id="second_treasurer" value="second_treasurer">
                                <h5 class="card-title px-3">Md Ashikuzzaman Molla</h5>
                            </div>
                            <img src="{{ asset('image/bank.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Joint Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-joint-secretary" type="checkbox"
                                    name="jointsecretary[]" id="first_jointsecretary" value="first_jointsecretary">
                                <h5 class="card-title px-3">Afrahim Mozid</h5>
                            </div>
                            <img src="{{ asset('image/coin.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-joint-secretary" type="checkbox"
                                    name="jointsecretary[]" id="second_jointsecretary" value="second_jointsecretary">
                                <h5 class="card-title px-3">Mehedi Hasan Sarker</h5>
                            </div>
                            <img src="{{ asset('image/bank.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-joint-secretary" type="checkbox"
                                    name="jointsecretary[]" id="third_jointsecretary" value="third_jointsecretary">
                                <h5 class="card-title px-3">Tahsin Khalid Borno</h5>
                            </div>
                            <img src="{{ asset('image/moshal.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-joint-secretary" type="checkbox"
                                    name="jointsecretary[]" id="fourth_jointsecretary" value="fourth_jointsecretary">
                                <h5 class="card-title px-3">Nahid Hasan Sagor</h5>
                            </div>
                            <img src="{{ asset('image/ghuri.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            <div class="py-5">
                <button type="submit" class="btn btn-warning w-100">Complete Vote</button>
            </div>
        </form>
    </div>


    <script>
        // Joint Secretary Section: Limit to 1 selections
        const jointsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-joint-secretary');

        jointsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-joint-secretary:checked');

                if (selected.length > 4) {
                    alert('You can voot only 4 candidates for Joint Secretary.');
                    checkbox.checked = false;
                }
            });
        });

        // Treasurer Section: Limit to 1 selections
        const treasurerCheckboxes = document.querySelectorAll('.candidate-checkbox-treasurer');

        treasurerCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-treasurer:checked');

                if (selected.length > 1) {
                    alert('You can voot only 1 candidates for Treasurer.');
                    checkbox.checked = false;
                }
            });
        });

        // Secretary Section: Limit to 1 selections
        const secretaryCheckboxes = document.querySelectorAll('.secretary-checkbox-president');

        secretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.secretary-checkbox-president:checked');

                if (selected.length > 1) {
                    alert('You can voot only 1 candidates for Secretary.');
                    checkbox.checked = false;
                }
            });
        });

        // Vice President Section: Limit to 5 selections
        const vicePresidentCheckboxes = document.querySelectorAll('.candidate-checkbox-vice');

        vicePresidentCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-vice:checked');

                if (selected.length > 5) {
                    alert('You can voot only 5 candidates for Vice President.');
                    checkbox.checked = false;
                }
            });
        });

        // President Section: Limit to 1 selections
        const presidentCheckboxes = document.querySelectorAll('.candidate-checkbox-president');

        presidentCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-president:checked');

                if (selected.length > 1) {
                    alert('You can voot only 1 candidates for President.');
                    checkbox.checked = false;
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
