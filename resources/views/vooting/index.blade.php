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

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background-color: #ffffff;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #f8f9fa;
        }

        .small-img {
            width: 80px;
            height: 80px;
            border-radius: 30%;
            margin-left: auto;
            margin-right: 15px;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin: 0;
        }

        .hover-bg-sm:hover {
            background-color: #e0f7fa;
        }

        .form-control {
            border-radius: 8px;
            font-size: 16px;
        }
    </style>


</head>

<body style="background: rgb(4, 32, 66);">

    <!-- voting-form.blade.php -->

    <div class="container mt-5">
        <form action="{{ route('vootingstore') }}" method="POST" class="mx-auto" style="max-width: 750px;">
            @csrf
            <div class="form-group">
                <input type="text" name="id_number" id="id_number" placeholder="Voting ID number" required class="form-control form-control-lg" aria-label="Voter Name">
            </div>

        <h2 class="text-center mt-4 mb-4 text-white">Vote Your Favorite Candidate</h2>

            {{-- President --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    President (upto 1 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-president" type="checkbox"
                                    name="president[]" id="first_president" value="first_president">
                                <h5 class="card-title px-3">Shibbir Ahmed</h5>
                            </div>
                            <img src="{{ asset('image/singho.jpg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/bagh.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Vice President --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position: Vice
                    President (upto 5 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-vice" type="checkbox"
                                    name="vice_president[]" id="first_vice_president" value="first_vice_president">
                                <h5 class="card-title px-3">Abir Hossain Talukder</h5>
                            </div>
                            <img src="{{ asset('image/jahaj.jpeg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/rickshaw.jpeg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/train.jpeg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/helicopter.jpeg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/rocket.jpeg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/motorcycle.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- General Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    General Secretary  (upto 1 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input secretary-checkbox-president" type="checkbox"
                                    name="secretary[]" id="first_secretary" value="first_secretary">
                                <h5 class="card-title px-3">Fakhrul Islam Prangon</h5>
                            </div>
                            <img src="{{ asset('image/dolphine.jpg') }}" class="card-img-top img-fluid small-img"
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
                            <img src="{{ asset('image/timi.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Treasurer --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Treasurer  (upto 1 vote)</label>
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

            {{-- Joint Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Joint Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    {{-- First join secretary --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Afrahim Mozid</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-first-joint-secretary" type="checkbox"
                                    name="firstjointsecretary[]" id="first_jointsecretary_yes" value="first_jointsecretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-first-joint-secretary" type="checkbox"
                                    name="firstjointsecretary[]" id="first_jointsecretary_no" value="first_jointsecretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/dhol.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Second join secretary --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Mehedi Hasan Sarker</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-second-joint-secretary" type="checkbox"
                                    name="secondjointsecretary[]" id="second_jointsecretary_yes" value="second_jointsecretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-second-joint-secretary" type="checkbox"
                                    name="secondjointsecretary[]" id="second_jointsecretary_no" value="second_jointsecretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/aktara.png') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Third join secretary --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Tahsin Khalid Borno</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-third-joint-secretary" type="checkbox"
                                    name="thirdjointsecretary[]" id="third_jointsecretary_yes" value="third_jointsecretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-third-joint-secretary" type="checkbox"
                                    name="thirdjointsecretary[]" id="third_jointsecretary_no" value="third_jointsecretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/moshal.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Fourth join secretary --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Nahid Hasan Sagor</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-fourth-joint-secretary" type="checkbox"
                                    name="fourthjointsecretary[]" id="fourth_jointsecretary_yes" value="fourth_jointsecretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-fourth-joint-secretary" type="checkbox"
                                    name="fourthjointsecretary[]" id="fourth_jointsecretary_no" value="fourth_jointsecretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/ghuri.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Organising Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Organising Secretary  (upto 4 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-organising-secretary" type="checkbox"
                                    name="organisingsecretary[]" id="first_organising_secretary" value="first_organising_secretary">
                                <h5 class="card-title px-3">Ruhan Rabbi</h5>
                            </div>
                            <img src="{{ asset('image/chil.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-organising-secretary" type="checkbox"
                                    name="organisingsecretary[]" id="second_organising_secretary" value="second_organising_secretary">
                                <h5 class="card-title px-3">Mehedi Hasan Pantho</h5>
                            </div>
                            <img src="{{ asset('image/horin.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-organising-secretary" type="checkbox"
                                    name="organisingsecretary[]" id="third_organising_secretary" value="third_organising_secretary">
                                <h5 class="card-title px-3">Tazmim Nahar</h5>
                            </div>
                            <img src="{{ asset('image/uth.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-organising-secretary" type="checkbox"
                                    name="organisingsecretary[]" id="fourth_organising_secretary" value="fourth_organising_secretary">
                                <h5 class="card-title px-3">Nusrat Tasfia Afroze Rodela</h5>
                            </div>
                            <img src="{{ asset('image/hati.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-organising-secretary" type="checkbox"
                                    name="organisingsecretary[]" id="fifth_organising_secretary" value="fifth_organising_secretary">
                                <h5 class="card-title px-3">Shanto Ali</h5>
                            </div>
                            <img src="{{ asset('image/ghora.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Office Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Office Secretary  (upto 1 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-office-secretary" type="checkbox"
                                    name="officesecretary[]" id="first_office_secretary" value="first_office_secretary">
                                <h5 class="card-title px-3">Uzma Islam</h5>
                            </div>
                            <img src="{{ asset('image/kolom.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-office-secretary" type="checkbox"
                                    name="officesecretary[]" id="second_office_secretary" value="second_office_secretary">
                                <h5 class="card-title px-3">Md Samsul Haque</h5>
                            </div>
                            <img src="{{ asset('image/boi.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Legal, Social Service & Ethics Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Legal, Social Service & Ethics Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Nazmin Nahar Shanta</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-legal-social-secretary" type="checkbox"
                                    name="legalsocialsecretary[]" id="legalsocial_secretary_yes" value="legalsocial_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-legal-social-secretary" type="checkbox"
                                    name="legalsocialsecretary[]" id="legalsocial_secretary_no" value="legalsocial_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/kobutor.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Broadcasting & Media Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Broadcasting & Media Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Sharmin Mahmud (Neza)</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-broadcasting-media-secretary" type="checkbox"
                                    name="broadcastingsecretary[]" id="broadcasting_secretary_yes" value="broadcasting_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-broadcasting-media-secretary" type="checkbox"
                                    name="broadcastingsecretary[]" id="broadcasting_secretary_no" value="broadcasting_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/radio.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Education, Literature & Research Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Education, Literature & Research Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Fabiha Mahzabin Rahman</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-education-literature-secretary" type="checkbox"
                                    name="educationsecretary[]" id="education_secretary_yes" value="education_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-education-literature-secretary" type="checkbox"
                                    name="educationsecretary[]" id="education_secretary_no" value="education_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/pdf.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Sports & Cultural Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Sports & Cultural Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Rabbi Al Yasin</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-sports-cultural-secretary" type="checkbox"
                                    name="sportsculturalsecretary[]" id="sports_secretary_yes" value="sports_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-sports-cultural-secretary" type="checkbox"
                                    name="sportsculturalsecretary[]" id="sports_secretary_no" value="sports_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/football.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Publishing Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Publishing Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Nusrat Zaman</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-publishing-secretary" type="checkbox"
                                    name="publishingsecretary[]" id="publishings_secretary_yes" value="publishings_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-publishing-secretary" type="checkbox"
                                    name="publishingsecretary[]" id="publishings_secretary_no" value="publishings_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/keyboard.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Hosting Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Hosting Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Jakia Sultana Sayma</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-hosting-secretary" type="checkbox"
                                    name="hostingsecretary[]" id="hosting_secretary_yes" value="hosting_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-hosting-secretary" type="checkbox"
                                    name="hostingsecretary[]" id="hosting_secretary_no" value="hosting_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/mic.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Assistant Organising Secretary --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Assistant Organising Secretary</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Mehedi Hasan</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-assistant-organising-secretary" type="checkbox"
                                    name="assistantorganisingecretary[]" id="assistantorganising_secretary_yes" value="assistantorganising_secretary_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-assistant-organising-secretary" type="checkbox"
                                    name="assistantorganisingecretary[]" id="assistantorganising_secretary_no" value="assistantorganising_secretary_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/kodal.jpg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Assistant Treasurer --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Assistant Treasurer (upto 1 vote)</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-assistant-treasurer" type="checkbox"
                                    name="assistanttreasurer[]" id="first_assistant_treasurer" value="first_assistant_treasurer">
                                <h5 class="card-title px-3">Ahnaf Hossain</h5>
                            </div>
                            <img src="{{ asset('image/table.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <input class="form-check-input candidate-checkbox-assistant-treasurer" type="checkbox"
                                    name="assistanttreasurer[]" id="second_assistant_treasurer" value="second_assistant_treasurer">
                                <h5 class="card-title px-3">Lutful Haque</h5>
                            </div>
                            <img src="{{ asset('image/chair.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                </div>
            </div>

            {{-- Executive Member --}}
            <div style="background: rgb(241, 241, 241);" class="hover-bg rounded-sm mt-4">
                <label class="form-label d-block h5 px-2 bg-primary py-2 text-white text-center fw-bold">Position:
                    Executive Member</label>
                <div class="row row-cols-1 row-cols-md-12 g-4 p-3">

                    {{-- First Executive Member --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Emam Hossain Ridoy</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-first-executive-member" type="checkbox"
                                    name="firstexecutivemember[]" id="first_executivemember_yes" value="first_executivemember_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-first-executive-member" type="checkbox"
                                    name="firstexecutivemember[]" id="first_executivemember_no" value="first_executivemember_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/hariken.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Second Executive Member --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Khadizatul Rima</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-second-executive-member" type="checkbox"
                                    name="secondexecutivemember[]" id="second_executivemember_yes" value="second_executivemember_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-second-executive-member" type="checkbox"
                                    name="secondexecutivemember[]" id="second_executivemember_no" value="second_executivemember_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/moi.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Third Executive Member --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">Shihab Bari</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-third-executive-member" type="checkbox"
                                    name="thirdexecutivemember[]" id="third_executivemember_yes" value="third_executivemember_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-third-executive-member" type="checkbox"
                                    name="thirdexecutivemember[]" id="third_executivemember_no" value="third_executivemember_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/mach.jpeg') }}" class="card-img-top img-fluid small-img"
                                alt="...">
                        </div>
                    </div>

                    {{-- Fourth Executive Member --}}
                    <div class="col">
                        <div class="card hover-bg-sm border-0 d-flex flex-row align-items-center text-center">
                            <div class="card-body d-flex">
                                <h5 for="" class="px-3">SM Nahid Sarwar Sumon</h5>
                                <div class="d-flex flex-row">
                                    <input class="form-check-input candidate-checkbox-fourth-executive-member" type="checkbox"
                                    name="fourthexecutivemember[]" id="fourth_executivemember_yes" value="fourth_executivemember_yes">
                                    <h6 class="card-title px-3">হ্যাঁ</h6>
                                <input class="form-check-input candidate-checkbox-fourth-executive-member" type="checkbox"
                                    name="fourthexecutivemember[]" id="fourth_executivemember_no" value="fourth_executivemember_no">
                                    <h6 class="card-title px-3">না</h6>
                                </div>
                            </div>
                            <img src="{{ asset('image/chaka.jpeg') }}" class="card-img-top img-fluid small-img"
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
        document.querySelector('form').addEventListener('submit', function(event) {
            const allowedIDs = [
            "Nx2p!oCck5Ln", "L@yX3*s#Ui7P", "Qf8cYWqz&PdV", "s0L%3#yA^rBH", "xHv2L#0co7Ny", "nA2^Jcs0B7yU", "3cB1Wg7T0!Hn", "x&YQ0%w93dRb", "tG#9Hw2&j5Kk", "n5*1FcB0yPpR", "L0c!x8H4cFj#", "7^w2OcnRk8Pz", "x3r!j5BcLn^O", "k*1P9S#w2L7d", "y5F$3oN#k8Hb", "R!8kPz#4^s1N", "5@dG2W^0ck9H", "z3L*H0o1TcrP", "s#4j2F!Yk%8L", "Y3^Wco7R0k5P", "D1L#@9y0^s3k", "0cRw2^kL3&Hn", "K1*Fj5o!9HcP", "x8L2rN$0#5^j", "n^7@Lk1$5F8y", "w3^Tck1!9L5y", "P&5Nck9^1o3F", "s4@F^L$2o!8j", "j2!NcLk5o^8w", "n^9H$2o0@7F3", "K1$7w^j0oL5P", "9L*H$3w2k@T^", "0s8Fj#1N!5^L", "5k9T@o^1Y$3P", "o&9Y$3L@0j^k","tG5L#@w0N^1P", "j1L9kT*2o!$^", "P3cY!0@w8F^N", "k2j9^L*o1$7T", "s7#k8L$0o!^P",
            "n*5Lk9@Y0^T$", "3wcHk9^1F!oY", "5s$@Lk9o1N^F", "n7!wL0^kcY5P", "Y@3F9$^2Lo0k", "x2Lk!Y0^1$8w", "0o@7Lk5T!^cP", "n5F1Lk@3^$8H", "9T$0L^k5!o@F", "k2@j9*L^5wcP", "x9!H@o5k0L^T", "L*9^5kcY@2w0", "0F*o3^k1L$9Y", "o&3k^L0cY9@5", "1F*Y@k9$3L^0", "Lk$2w^9@0o!F", "5^j9k0L@Y$3F", "L&9^5kY@2T$0", "5k9T@oL$^1F3", "s9!kL@0Y^$5P", "F1L*9k@3$^w2", "9k*L^Y0$5o@3", "n2L5k@3w^1F$", "L0kY@^3$5!9F", "8k2L!o3^5xY@", "k*L9^@w3xY0o", "5^k3L@2$0oY9", "s9L!Y@5^k$3o", "Y1k3@5^xL0wF", "k9^oL$3@wY2T", "5L*o3^k0Y@9$", "n5k!L^@3xY9F", "Lk$9o^3@5Y0w", "3^Y1kL@0$5oF", "k^L@5o3xwY9F", "n9k!5L^@3oxY", "5L3@Y0o^9xkT", "9^Lk5Y$@2o3w", "3^k0@5LxYo9F",
            "L&5k^9Y@3xo0", "oL@^k9$5T3Yw", "Y*5^kL9@3xoF", "o9L3^k$5@YFw", "k5L@oY3^9xFw", "5Y^Lk3@0xo9F", "L5^k9@o3YxFw", "k9L*5@^Y$0o3", "s0^9Lk@Y3xFw", "o5L^@Y$9k3Fw", "9L^k5@3YxoFw", "L@k^5Y9xw3Fo", "3kY^@L0$9Fw5", "k@Y^L5xo93Fw", "5L@kY^3$9Fo0", "kL@^3Y5o9xFw", "Y3L@5k^xFw0o9", "oL5^9@k$3FwY", "F3Lk^o@5Y$9w", "Y@Lk3$5o^Fw9", "L@5k9$3Y^Fw0", "oL9^k@Y$5Fw3", "Y3k^L5@0oxFw", "k@3Y$5oL^Fw0", "9oL^5@kYxFw3", "o^3L@5xYk9Fw", "F@9kL^o5$3Yw", "3L5@k^YxFw0o", "k@L9o^3Y5xFw", "L5k@^3Y$9Fw0", "5L^Y@3kxFw9o", "kY5^@L3Fw$9o", "9Lk^Y5@Fw0xo", "Fw9^5@oYL$3k", "k@^L5FwY0o3$", "F0L@k^Yw9$3o", "kL9Fw5@3Y$^o", "Y^k@L9Fw5$3o", "Fw9@Y$3k^0L5",
            "Lk5Fw@^Y$0o9", "Fw5Lk^Y9@3xo", "Y@5LkFw^$3o9", "Lk9Fw^xY@0o3", "L@Fw9k$3Y^5o", "Fw9L^Y@o3$5k", "3FwLkY^5$@o9", "Fw5@Y^3L$9ko", "Lk9FwY$5^o@3", "Fw@o5L3^k9Y$", "Y^5Fw@3Lk9xo", "L^Fw3@5Yko9$", "3FwY@o5^Lk$9", "Fw5k^Y@3L$9o", "3@oFw5L^kY9$", "LkFw5^@oY$39", "FwY@oL5k^3$9", "5YFw@o3^Lk$9", "LkFw^5@Y3o9$", "Fw5kY^@o3L$9", "Fw9@Y5Lk3xo^", "Fw^oL5Y@9k$3", "9FwL@o^Y5k3$", "FwL@5o3kY^9$", "L^oFwY9@3$5k", "LkFw5Y^@3$9o", "Fw@3oY5L^9xk", "L9kFwY^5@o$3", "L@Y^kFw5o9$3", "Fw@5^oY3Lk$9", "FwY^3@5Lko$9", "kL@oYFw5^$39", "FwL5@Yk3^o$9", "Fw@3L5Yko^$9", "Fw9@Lk^Y5$3o", "3Y5Fw@oLk^$9", "FwY9L^@o3k$5", "9FwY@oL^5$3k", "L9FwY3@5^kxo",
            "YFw5L@^3xko9", "FwY9^@L3o5xk", "Fw5Y@^o3L9xk", "FwL@Y5^o9k3$", "3Fw@L5Yk^o$9", "5YFw@3oLk^$9", "Fw@oY5kL3$9^", "YFw5@L9o^3xk", "FwL@5Yk3^9xo", "9YFw@o^Lk$3", "Fw5@Yk^o3$9L", "Fw9L@o3Yk^5$", "Fw@3oY5L9k$^", "3Fw@Y9^5Loxk", "9Fw@Lk3^Y5xo", "LkFw5^o@3Y$9", "9@YFw5L3^xoK", "FwL@o5^Y3$9k", "FwY5@oL9$^3k", "L@Fw9o3^5xYk", "Fw5L@oY^3$9k", "5FwY@L^9k3xo", "9Fw@L3^oY5xk", "Fw@Y^5L3o$9k", "FwY5L@3^o9xk", "3Fw@L5kY^9xo", "5Fw@Y^3Lk9xo", "Fw3@5L9Y^oxk", "9Fw5L@Y3^oxk", "YFw@3L5o9k^$", "L9Fw@Y^o5$3k", "YFw5@L3o9xk^", "Fw@9Y5Lk^o$3", "Fw@o5^LkY3$9", "L9YFw@^o3k$5", "Y5Fw@L3k^9o$", "9FwY@3L5^oxk", "Lk@Fw^Y9o5$3", "YFw5^L@9o$3k", "Y@FwL^5o3$9k",
            "LkFw@Y3^5$9o", "Fw9@o3LkY^5$", "3Fw@o5L9Y^k$", "L9YFw@3^o5xk", "5Fw@3o^LkY$9", "Y5@Fw3o9Lk^$", "Fw5L@oY3^9xk", "Fw3@o5L^k9xY", "FwY9L@3^5kxo", "Y@FwL5o3^9k$", "LkFw5Y@^3o9$", "9Fw@oL5Y^k$3", "Fw@5L9kY3^o$", "FwY@3o5L^k9$", "9Fw@5L^oYk$3",
            "N0qM14kuk%IA", "eUI0eb2QXUtu", "*1lqJ0mxSk3l", "uMTx!LO7t4C&", "^*1iKqPc^h1b", "QHbPbN@ICBVR", "!RrF4JU!hj*p", "0&DsB1Nu7q9a", "@hDY4^I*XCaW", "FW23n&Rce^sR", "K^p%lVptw&%R", "%fV01ycjcOW!", "8*u#Eu89W#tS", "UWCXow^vbxBS", "#6z0srRuK!av", "YpFFqN8zb#Al", "&GUJkQnV6OE&", "QaWieE3eZDZl", "edwFLbrqfOtx", "hUF0bIEVEvJ6", "HFHpENXXgNwp", "^hvwPGamjmyu", "bKye^vKrDARp", "S0F3wYbO20Zl", "G19@5riDTZaw", "!FaZzRYgO6pV", "c6g@a8k6Mc06", "2PSbcs@CLVLB", "TWNsuTOdbC5*", "^ptiNntGB9Zd", "!ZQTJd1Wq^*W", "JBBhwW7Bh&Mg", "&e7hgA2P8JdC", "6pDN6O&ARMvN", "N2vko&@ZaG0J", "ed2MX6b%tXMq", "oh^AB6mn5i@x", "DP4ik1V6eQ11", "AA@fQyW*vIC$", "U9l7YEzO7gv$", "j%@IPPYm0err", "dS%kn0rexGvO", "0vDKwXNgH4JJ", "pre%INoG8#Dm", "M5gejPmdad2X", "HkID3p2u!q28", "QUabl%pH7jr*", "$7jIYM26J5ZJ", "nEMCJmtxVWAD", "ukvmX7E%QOW7", "kE2Pjw5yjGSp", "1b4lH2x5o8Bg", "bSSy@sb#h!fZ", "WPtgEUC9S@sD", "XNrF*D5pFuV6", "Nv8VGpBbY@wN", "kdQQ7#oA5dWY", "5JgPHJIez6t@", "I*7WV84ptFD%", "b0c33pU8eMk9", "PTy4KYakTSIn", "kGHhxhfv69oN", "^nYVPFYdyZ8&", "oTDVCBt0bPBb", "ERf1*dO1ZdzQ", "wr2y8bPL0sxD", "7bM@VemU#2NH", "%kHL4zahCCw&"];

            const idNumber = document.getElementById('id_number').value.trim();

            if (!allowedIDs.includes(idNumber)) {
                alert("This ID is not allowed to vote.");
                event.preventDefault();
            }
        });

        @if ($errors->has('id_number'))
            alert("{{ $errors->first('id_number') }}");
        @endif

        // Fourth Executive Member Section: Limit to 1 selections
        const fourthecutivememberCheckboxes = document.querySelectorAll('.candidate-checkbox-fourth-executive-member');

        fourthecutivememberCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-fourth-executive-member:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Third Executive Member Section: Limit to 1 selections
        const thirdecutivememberCheckboxes = document.querySelectorAll('.candidate-checkbox-third-executive-member');

        thirdecutivememberCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-third-executive-member:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Second Executive Member Section: Limit to 1 selections
        const secondecutivememberCheckboxes = document.querySelectorAll('.candidate-checkbox-second-executive-member');

        secondecutivememberCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-second-executive-member:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // First Executive Member Section: Limit to 1 selections
        const firstexecutivememberCheckboxes = document.querySelectorAll('.candidate-checkbox-first-executive-member');

        firstexecutivememberCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-first-executive-member:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Assistant Treasurer Section: Limit to 1 selections
        const assistanttreasurerCheckboxes = document.querySelectorAll('.candidate-checkbox-assistant-treasurer');

        assistanttreasurerCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-assistant-treasurer:checked');

                if (selected.length > 1) {
                    alert('You can vote only 1 candidates for Assistant Treasurer.');
                    checkbox.checked = false;
                }
            });
        });

        // Assistant Organising Secretary Section: Limit to 1 selections
        const assistantorganisingsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-assistant-organising-secretary');

        assistantorganisingsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-assistant-organising-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Hosting Secretary Section: Limit to 1 selections
        const hostingsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-hosting-secretary');

        hostingsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-hosting-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Publishing Secretary Section: Limit to 1 selections
        const publishingsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-publishing-secretary');

        publishingsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-publishing-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Sports & Cultural Secretary Section: Limit to 1 selections
        const sportsculturalsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-sports-cultural-secretary');

        sportsculturalsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-sports-cultural-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Education, Literature & Research Secretary Section: Limit to 1 selections
        const educationsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-education-literature-secretary');

        educationsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-education-literature-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Broadcasting & Media Secretary Section: Limit to 1 selections
        const broadcastingsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-broadcasting-media-secretary');

        broadcastingsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-broadcasting-media-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Legal, Social Service & Ethics Secretary Section: Limit to 1 selections
        const legalsocialsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-legal-social-secretary');

        legalsocialsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-legal-social-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Offile Secretary Section: Limit to 1 selections
        const officesecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-office-secretary');

        officesecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-office-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only 1 candidates for Offile Secretary.');
                    checkbox.checked = false;
                }
            });
        });

        // Organising Secretary Section: Limit to 1 selections
        const organisingsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-organising-secretary');

        organisingsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-organising-secretary:checked');

                if (selected.length > 4) {
                    alert('You can vote only 4 candidates for Organising Secretary.');
                    checkbox.checked = false;
                }
            });
        });

        // Fourth Joint Secretary Section: Limit to 1 selections
        const fourthjointsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-fourth-joint-secretary');

        fourthjointsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-fourth-joint-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Third Joint Secretary Section: Limit to 1 selections
        const thirdjointsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-third-joint-secretary');

        thirdjointsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-third-joint-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // Second Joint Secretary Section: Limit to 1 selections
        const secondjointsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-second-joint-secretary');

        secondjointsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-second-joint-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
                    checkbox.checked = false;
                }
            });
        });

        // First Joint Secretary Section: Limit to 1 selections
        const firstjointsecretaryCheckboxes = document.querySelectorAll('.candidate-checkbox-first-joint-secretary');

        firstjointsecretaryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-first-joint-secretary:checked');

                if (selected.length > 1) {
                    alert('You can vote only হ্যাঁ / না');
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
                    alert('You can vote only 1 candidates for Treasurer.');
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
                    alert('You can vote only 1 candidates for Secretary.');
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
                    alert('You can vote only 5 candidates for Vice President.');
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
                    alert('You can vote only 1 candidates for President.');
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
