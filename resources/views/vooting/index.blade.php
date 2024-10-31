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
                    President</label>
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
                    President</label>
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
                    General Secretary</label>
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
                    Organising Secretary</label>
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
                    Office Secretary</label>
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
                    Assistant Treasurer</label>
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
        // Fourth Executive Member Section: Limit to 1 selections
        const fourthecutivememberCheckboxes = document.querySelectorAll('.candidate-checkbox-fourth-executive-member');

        fourthecutivememberCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = document.querySelectorAll('.candidate-checkbox-fourth-executive-member:checked');

                if (selected.length > 1) {
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only 1 candidates for Assistant Treasurer.');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only 1 candidates for Offile Secretary.');
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
                    alert('You can voot only 4 candidates for Organising Secretary.');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
                    alert('You can voot only হ্যাঁ / না');
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
