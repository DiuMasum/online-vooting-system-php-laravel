<?php

namespace App\Http\Controllers;

use App\Models\UsedId;
use App\Models\VootStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VootController extends Controller
{
    public function Vooting()
    {
        return view('vooting.index');
    }

    public function VootingStore(Request $request)
    {
         // Allowed ID numbers
         $allowedIDs = [
            "Nx2p!oCck5Ln", "L@yX3*s#Ui7P", "Qf8cYWqz&PdV", "s0L%3#yA^rBH", "xHv2L#0co7Ny", "nA2^Jcs0B7yU", "3cB1Wg7T0!Hn", "x&YQ0%w93dRb", "tG#9Hw2&j5Kk", "n5*1FcB0yPpR", "L0c!x8H4cFj#", "7^w2OcnRk8Pz", "x3r!j5BcLn^O", "k*1P9S#w2L7d", "y5F$3oN#k8Hb", "R!8kPz#4^s1N", "5@dG2W^0ck9H", "z3L*H0o1TcrP", "s#4j2F!Yk%8L", "Y3^Wco7R0k5P", "D1L#@9y0^s3k", "0cRw2^kL3&Hn", "K1*Fj5o!9HcP", "x8L2rN$0#5^j", "n^7@Lk1$5F8y", "w3^Tck1!9L5y", "P&5Nck9^1o3F", "s4@F^L$2o!8j", "j2!NcLk5o^8w", "n^9H$2o0@7F3", "K1$7w^j0oL5P", "9L*H$3w2k@T^", "0s8Fj#1N!5^L", "5k9T@o^1Y$3P", "o&9Y$3L@0j^k","tG5L#@w0N^1P", "j1L9kT*2o!$^", "P3cY!0@w8F^N", "k2j9^L*o1$7T", "s7#k8L$0o!^P",
            "n*5Lk9@Y0^T$", "3wcHk9^1F!oY", "5s$@Lk9o1N^F", "n7!wL0^kcY5P", "Y@3F9$^2Lo0k", "x2Lk!Y0^1$8w", "0o@7Lk5T!^cP", "n5F1Lk@3^$8H", "9T$0L^k5!o@F", "k2@j9*L^5wcP", "x9!H@o5k0L^T", "L*9^5kcY@2w0", "0F*o3^k1L$9Y", "o&3k^L0cY9@5", "1F*Y@k9$3L^0", "Lk$2w^9@0o!F", "5^j9k0L@Y$3F", "L&9^5kY@2T$0", "5k9T@oL$^1F3", "s9!kL@0Y^$5P", "F1L*9k@3$^w2", "9k*L^Y0$5o@3", "n2L5k@3w^1F$", "L0kY@^3$5!9F", "8k2L!o3^5xY@", "k*L9^@w3xY0o", "5^k3L@2$0oY9", "s9L!Y@5^k$3o", "Y1k3@5^xL0wF", "k9^oL$3@wY2T", "5L*o3^k0Y@9$", "n5k!L^@3xY9F", "Lk$9o^3@5Y0w", "3^Y1kL@0$5oF", "k^L@5o3xwY9F", "n9k!5L^@3oxY", "5L3@Y0o^9xkT", "9^Lk5Y$@2o3w", "3^k0@5LxYo9F",
            "L&5k^9Y@3xo0", "oL@^k9$5T3Yw", "Y*5^kL9@3xoF", "o9L3^k$5@YFw", "k5L@oY3^9xFw", "5Y^Lk3@0xo9F", "L5^k9@o3YxFw", "k9L*5@^Y$0o3", "s0^9Lk@Y3xFw", "o5L^@Y$9k3Fw", "9L^k5@3YxoFw", "L@k^5Y9xw3Fo", "3kY^@L0$9Fw5", "k@Y^L5xo93Fw", "5L@kY^3$9Fo0", "kL@^3Y5o9xFw", "Y3L@5k^xFw0o9", "oL5^9@k$3FwY", "F3Lk^o@5Y$9w", "Y@Lk3$5o^Fw9", "L@5k9$3Y^Fw0", "oL9^k@Y$5Fw3", "Y3k^L5@0oxFw", "k@3Y$5oL^Fw0", "9oL^5@kYxFw3", "o^3L@5xYk9Fw", "F@9kL^o5$3Yw", "3L5@k^YxFw0o", "k@L9o^3Y5xFw", "L5k@^3Y$9Fw0", "5L^Y@3kxFw9o", "kY5^@L3Fw$9o", "9Lk^Y5@Fw0xo", "Fw9^5@oYL$3k", "k@^L5FwY0o3$", "F0L@k^Yw9$3o", "kL9Fw5@3Y$^o", "Y^k@L9Fw5$3o", "Fw9@Y$3k^0L5",
            "Lk5Fw@^Y$0o9", "Fw5Lk^Y9@3xo", "Y@5LkFw^$3o9", "Lk9Fw^xY@0o3", "L@Fw9k$3Y^5o", "Fw9L^Y@o3$5k", "3FwLkY^5$@o9", "Fw5@Y^3L$9ko", "Lk9FwY$5^o@3", "Fw@o5L3^k9Y$", "Y^5Fw@3Lk9xo", "L^Fw3@5Yko9$", "3FwY@o5^Lk$9", "Fw5k^Y@3L$9o", "3@oFw5L^kY9$", "LkFw5^@oY$39", "FwY@oL5k^3$9", "5YFw@o3^Lk$9", "LkFw^5@Y3o9$", "Fw5kY^@o3L$9", "Fw9@Y5Lk3xo^", "Fw^oL5Y@9k$3", "9FwL@o^Y5k3$", "FwL@5o3kY^9$", "L^oFwY9@3$5k", "LkFw5Y^@3$9o", "Fw@3oY5L^9xk", "L9kFwY^5@o$3", "L@Y^kFw5o9$3", "Fw@5^oY3Lk$9", "FwY^3@5Lko$9", "kL@oYFw5^$39", "FwL5@Yk3^o$9", "Fw@3L5Yko^$9", "Fw9@Lk^Y5$3o", "3Y5Fw@oLk^$9", "FwY9L^@o3k$5", "9FwY@oL^5$3k", "L9FwY3@5^kxo",
            "YFw5L@^3xko9", "FwY9^@L3o5xk", "Fw5Y@^o3L9xk", "FwL@Y5^o9k3$", "3Fw@L5Yk^o$9", "5YFw@3oLk^$9", "Fw@oY5kL3$9^", "YFw5@L9o^3xk", "FwL@5Yk3^9xo", "9YFw@o^Lk$3", "Fw5@Yk^o3$9L", "Fw9L@o3Yk^5$", "Fw@3oY5L9k$^", "3Fw@Y9^5Loxk", "9Fw@Lk3^Y5xo", "LkFw5^o@3Y$9", "9@YFw5L3^xoK", "FwL@o5^Y3$9k", "FwY5@oL9$^3k", "L@Fw9o3^5xYk", "Fw5L@oY^3$9k", "5FwY@L^9k3xo", "9Fw@L3^oY5xk", "Fw@Y^5L3o$9k", "FwY5L@3^o9xk", "3Fw@L5kY^9xo", "5Fw@Y^3Lk9xo", "Fw3@5L9Y^oxk", "9Fw5L@Y3^oxk", "YFw@3L5o9k^$", "L9Fw@Y^o5$3k", "YFw5@L3o9xk^", "Fw@9Y5Lk^o$3", "Fw@o5^LkY3$9", "L9YFw@^o3k$5", "Y5Fw@L3k^9o$", "9FwY@3L5^oxk", "Lk@Fw^Y9o5$3", "YFw5^L@9o$3k", "Y@FwL^5o3$9k",
            "LkFw@Y3^5$9o", "Fw9@o3LkY^5$", "3Fw@o5L9Y^k$", "L9YFw@3^o5xk", "5Fw@3o^LkY$9", "Y5@Fw3o9Lk^$", "Fw5L@oY3^9xk", "Fw3@o5L^k9xY", "FwY9L@3^5kxo", "Y@FwL5o3^9k$", "LkFw5Y@^3o9$", "9Fw@oL5Y^k$3", "Fw@5L9kY3^o$", "FwY@3o5L^k9$", "9Fw@5L^oYk$3",
            "N0qM14kuk%IA", "eUI0eb2QXUtu", "*1lqJ0mxSk3l", "uMTx!LO7t4C&", "^*1iKqPc^h1b", "QHbPbN@ICBVR", "!RrF4JU!hj*p", "0&DsB1Nu7q9a", "@hDY4^I*XCaW", "FW23n&Rce^sR", "K^p%lVptw&%R", "%fV01ycjcOW!", "8*u#Eu89W#tS", "UWCXow^vbxBS", "#6z0srRuK!av", "YpFFqN8zb#Al", "&GUJkQnV6OE&", "QaWieE3eZDZl", "edwFLbrqfOtx", "hUF0bIEVEvJ6", "HFHpENXXgNwp", "^hvwPGamjmyu", "bKye^vKrDARp", "S0F3wYbO20Zl", "G19@5riDTZaw", "!FaZzRYgO6pV", "c6g@a8k6Mc06", "2PSbcs@CLVLB", "TWNsuTOdbC5*", "^ptiNntGB9Zd", "!ZQTJd1Wq^*W", "JBBhwW7Bh&Mg", "&e7hgA2P8JdC", "6pDN6O&ARMvN", "N2vko&@ZaG0J", "ed2MX6b%tXMq", "oh^AB6mn5i@x", "DP4ik1V6eQ11", "AA@fQyW*vIC$", "U9l7YEzO7gv$", "j%@IPPYm0err", "dS%kn0rexGvO", "0vDKwXNgH4JJ", "pre%INoG8#Dm", "M5gejPmdad2X", "HkID3p2u!q28", "QUabl%pH7jr*", "$7jIYM26J5ZJ", "nEMCJmtxVWAD", "ukvmX7E%QOW7", "kE2Pjw5yjGSp", "1b4lH2x5o8Bg", "bSSy@sb#h!fZ", "WPtgEUC9S@sD", "XNrF*D5pFuV6", "Nv8VGpBbY@wN", "kdQQ7#oA5dWY", "5JgPHJIez6t@", "I*7WV84ptFD%", "b0c33pU8eMk9", "PTy4KYakTSIn", "kGHhxhfv69oN", "^nYVPFYdyZ8&", "oTDVCBt0bPBb", "ERf1*dO1ZdzQ", "wr2y8bPL0sxD", "7bM@VemU#2NH", "%kHL4zahCCw&"];


        // Retrieve the ID number from the form input
        $idNumber = $request->input('id_number');

        // Check if the ID is allowed
        if (!in_array($idNumber, $allowedIDs)) {
            return redirect()->back()->withErrors(['id_number' => 'This ID is not allowed to vote.']);
        }

        // Check if the ID has already been used
        if (VootStore::where('id_number', $idNumber)->exists()) {
            return redirect()->back()->withErrors(['id_number' => 'You have already cast your vote using this ID']);
        }





        // Validate the input
        $validated = $request->validate([
            'president' => 'array|max:2',
            'vice_president' => 'array|max:5',
            'secretary' => 'array|max:2',
            'treasurer' => 'array|max:2',
            'firstjointsecretary' => 'array|max:2',
            'secondjointsecretary' => 'array|max:2',
            'thirdjointsecretary' => 'array|max:2',
            'fourthjointsecretary' => 'array|max:2',
            'organisingsecretary' => 'array|max:4',
            'officesecretary' => 'array|max:2',
            'legalsocialsecretary' => 'array|max:2',
            'broadcastingsecretary' => 'array|max:2',
            'educationsecretary' => 'array|max:2',
            'sportsculturalsecretary' => 'array|max:2',
            'publishingsecretary' => 'array|max:2',
            'hostingsecretary' => 'array|max:2',
            'assistantorganisingecretary' => 'array|max:2',
            'assistanttreasurer' => 'array|max:2',
            'firstexecutivemember' => 'array|max:2',
            'secondexecutivemember' => 'array|max:2',
            'thirdexecutivemember' => 'array|max:2',
            'fourthexecutivemember' => 'array|max:2',
        ]);

        // Save the vote in the database
        VootStore::create([
            'id_number' => $idNumber,
            'president' => $validated['president'] ?? [],
            'vice_president' => $validated['vice_president'] ?? [],
            'secretary' => $validated['secretary'] ?? [],
            'treasurer' => $validated['treasurer'] ?? [],
            'firstjointsecretary' => $validated['firstjointsecretary'] ?? [],
            'secondjointsecretary' => $validated['secondjointsecretary'] ?? [],
            'thirdjointsecretary' => $validated['thirdjointsecretary'] ?? [],
            'fourthjointsecretary' => $validated['fourthjointsecretary'] ?? [],
            'organisingsecretary' => $validated['organisingsecretary'] ?? [],
            'officesecretary' => $validated['officesecretary'] ?? [],
            'legalsocialsecretary' => $validated['legalsocialsecretary'] ?? [],
            'broadcastingsecretary' => $validated['broadcastingsecretary'] ?? [],
            'educationsecretary' => $validated['educationsecretary'] ?? [],
            'sportsculturalsecretary' => $validated['sportsculturalsecretary'] ?? [],
            'publishingsecretary' => $validated['publishingsecretary'] ?? [],
            'hostingsecretary' => $validated['hostingsecretary'] ?? [],
            'assistantorganisingecretary' => $validated['assistantorganisingecretary'] ?? [],
            'assistanttreasurer' => $validated['assistanttreasurer'] ?? [],
            'firstexecutivemember' => $validated['firstexecutivemember'] ?? [],
            'secondexecutivemember' => $validated['secondexecutivemember'] ?? [],
            'thirdexecutivemember' => $validated['thirdexecutivemember'] ?? [],
            'fourthexecutivemember' => $validated['fourthexecutivemember'] ?? [],
        ]);

        return redirect()->route('thankyou')->with('success', 'Your Vote Done successfully!');
    }

    public function VootingResult()
    {
        // Mapping candidate keys to their real names
        $candidateNames = [
            'first_president' => 'Shibbir Ahmed',
            'second_president' => 'Tuhin Kalimullah',
            'first_vice_president' => 'Abir Hossain Talukder',
            'second_vice_president' => 'Farhana Islam Tamanna',
            'third_vice_president' => 'Md Mizanur Rahman',
            'fourth_vice_president' => 'Muhammad Jubayer Hossain',
            'fifth_vice_president' => 'Sadiul Islam Hridoy',
            'sixth_vice_president' => 'Md Nazmul Hasan Sarker',
            'seven_vice_president' => 'Muneem Mahidee',
            'first_secretary' => 'Fakhrul Islam Prangon',
            'second_secretary' => 'Zayed Bin Naser',
            'first_treasurer' => 'Abdullah Al Monsur',
            'second_treasurer' => 'Md Ashikuzzaman Molla',
            'first_jointsecretary_yes' => 'Afrahim Mozid  ( হ্যাঁ )',
            'first_jointsecretary_no' => 'Afrahim Mozid  ( না )',
            'second_jointsecretary_yes' => 'Mehedi Hasan Sarker ( হ্যাঁ )',
            'second_jointsecretary_no' => 'Mehedi Hasan Sarker ( না )',
            'third_jointsecretary_yes' => 'Tahsin Khalid Borno ( হ্যাঁ )',
            'third_jointsecretary_no' => 'Tahsin Khalid Borno ( না )',
            'fourth_jointsecretary_yes' => 'Nahid Hasan Sagor ( হ্যাঁ )',
            'fourth_jointsecretary_no' => 'Nahid Hasan Sagor ( না )',
            'first_organising_secretary' => 'Ruhan Rabbi',
            'second_organising_secretary' => 'Mehedi Hasan Pantho',
            'third_organising_secretary' => 'Tazmim Nahar',
            'fourth_organising_secretary' => 'Nusrat Tasfia Afroze Rodela',
            'fifth_organising_secretary' => 'Shanto Ali',
            'first_office_secretary' => 'Uzma Islam',
            'second_office_secretary' => 'Md Samsul Haque',
            'legalsocial_secretary_yes' => 'Nazmin Nahar Shanta ( হ্যাঁ )',
            'legalsocial_secretary_no' => 'Nazmin Nahar Shanta ( না )',
            'broadcasting_secretary_yes' => 'Sharmin Mahmud (Neza) ( হ্যাঁ )',
            'broadcasting_secretary_no' => 'Sharmin Mahmud (Neza) ( না )',
            'education_secretary_yes' => 'Fabiha Mahzabin Rahman ( হ্যাঁ )',
            'education_secretary_no' => 'Fabiha Mahzabin Rahman ( না )',
            'sports_secretary_yes' => 'Rabbi Al Yasin ( হ্যাঁ )',
            'sports_secretary_no' => 'Rabbi Al Yasin ( না )',
            'publishings_secretary_yes' => 'Nusrat Zaman ( হ্যাঁ )',
            'publishings_secretary_no' => 'Nusrat Zaman ( না )',
            'hosting_secretary_yes' => 'Jakia Sultana Sayma ( হ্যাঁ )',
            'hosting_secretary_no' => 'Jakia Sultana Sayma ( না )',
            'assistantorganising_secretary_yes' => 'Mehedi Hasan ( হ্যাঁ )',
            'assistantorganising_secretary_no' => 'Mehedi Hasan ( না )',
            'first_assistant_treasurer' => 'Ahnaf Hossain',
            'second_assistant_treasurer' => 'Lutful Haque',
            'first_executivemember_yes' => 'Emam Hossain Ridoy ( হ্যাঁ )',
            'first_executivemember_no' => 'Emam Hossain Ridoy ( না )',
            'second_executivemember_yes' => 'Khadizatul Rima ( হ্যাঁ )',
            'second_executivemember_no' => 'Khadizatul Rima ( না )',
            'third_executivemember_yes' => 'Shihab Bari ( হ্যাঁ )',
            'third_executivemember_no' => 'Shihab Bari ( না )',
            'fourth_executivemember_yes' => 'SM Nahid Sarwar Sumon ( হ্যাঁ )',
            'fourth_executivemember_no' => 'SM Nahid Sarwar Sumon ( না )',
        ];

        // Fetch all votes from the 'vootings' table
        $allVotes = VootStore::all();

        // Initialize vote counts
        $presidentVotes = [];
        $vicePresidentVotes = [];
        $secretaryVotes = [];
        $treasurerVotes = [];
        $firstjointsecretaryVotes = [];
        $secondjointsecretaryVotes = [];
        $thirdjointsecretaryVotes = [];
        $fourthjointsecretaryVotes = [];
        $organisingsecretaryVotes = [];
        $officesecretaryVotes = [];
        $legalsocialsecretaryVotes = [];
        $broadcastingsecretaryVotes = [];
        $educationsecretaryVotes = [];
        $sportsculturalsecretaryVotes = [];
        $publishingsecretaryVotes = [];
        $hostingsecretaryVotes = [];
        $assistantorganisingecretaryVotes = [];
        $assistanttreasurerVotes = [];
        $firstexecutivememberVotes = [];
        $secondexecutivememberVotes = [];
        $thirdexecutivememberVotes = [];
        $fourthexecutivememberVotes = [];

        // Process each vote entry
        foreach ($allVotes as $vote) {
            foreach ($vote->president as $candidate) {
                $presidentVotes[$candidate] = ($presidentVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->vice_president as $candidate) {
                $vicePresidentVotes[$candidate] = ($vicePresidentVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->secretary as $candidate) {
                $secretaryVotes[$candidate] = ($secretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->treasurer as $candidate) {
                $treasurerVotes[$candidate] = ($treasurerVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->firstjointsecretary as $candidate) {
                $firstjointsecretaryVotes[$candidate] = ($firstjointsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->secondjointsecretary as $candidate) {
                $secondjointsecretaryVotes[$candidate] = ($secondjointsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->thirdjointsecretary as $candidate) {
                $thirdjointsecretaryVotes[$candidate] = ($thirdjointsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->fourthjointsecretary as $candidate) {
                $fourthjointsecretaryVotes[$candidate] = ($fourthjointsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->organisingsecretary as $candidate) {
                $organisingsecretaryVotes[$candidate] = ($organisingsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->officesecretary as $candidate) {
                $officesecretaryVotes[$candidate] = ($officesecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->legalsocialsecretary as $candidate) {
                $legalsocialsecretaryVotes[$candidate] = ($legalsocialsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->broadcastingsecretary as $candidate) {
                $broadcastingsecretaryVotes[$candidate] = ($broadcastingsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->educationsecretary as $candidate) {
                $educationsecretaryVotes[$candidate] = ($educationsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->sportsculturalsecretary as $candidate) {
                $sportsculturalsecretaryVotes[$candidate] = ($sportsculturalsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->publishingsecretary as $candidate) {
                $publishingsecretaryVotes[$candidate] = ($publishingsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->hostingsecretary as $candidate) {
                $hostingsecretaryVotes[$candidate] = ($hostingsecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->assistantorganisingecretary as $candidate) {
                $assistantorganisingecretaryVotes[$candidate] = ($assistantorganisingecretaryVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->assistanttreasurer as $candidate) {
                $assistanttreasurerVotes[$candidate] = ($assistanttreasurerVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->firstexecutivemember as $candidate) {
                $firstexecutivememberVotes[$candidate] = ($firstexecutivememberVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->secondexecutivemember as $candidate) {
                $secondexecutivememberVotes[$candidate] = ($secondexecutivememberVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->thirdexecutivemember as $candidate) {
                $thirdexecutivememberVotes[$candidate] = ($thirdexecutivememberVotes[$candidate] ?? 0) + 1;
            }
            foreach ($vote->fourthexecutivemember as $candidate) {
                $fourthexecutivememberVotes[$candidate] = ($fourthexecutivememberVotes[$candidate] ?? 0) + 1;
            }
        }

        // Convert candidate keys to names for displaying
        $presidentVotes = $this->mapCandidateNames($presidentVotes, $candidateNames);
        $vicePresidentVotes = $this->mapCandidateNames($vicePresidentVotes, $candidateNames);
        $secretaryVotes = $this->mapCandidateNames($secretaryVotes, $candidateNames);
        $treasurerVotes = $this->mapCandidateNames($treasurerVotes, $candidateNames);
        $firstjointsecretaryVotes = $this->mapCandidateNames($firstjointsecretaryVotes, $candidateNames);
        $secondjointsecretaryVotes = $this->mapCandidateNames($secondjointsecretaryVotes, $candidateNames);
        $thirdjointsecretaryVotes = $this->mapCandidateNames($thirdjointsecretaryVotes, $candidateNames);
        $fourthjointsecretaryVotes = $this->mapCandidateNames($fourthjointsecretaryVotes, $candidateNames);
        $organisingsecretaryVotes = $this->mapCandidateNames($organisingsecretaryVotes, $candidateNames);
        $officesecretaryVotes = $this->mapCandidateNames($officesecretaryVotes, $candidateNames);
        $legalsocialsecretaryVotes = $this->mapCandidateNames($legalsocialsecretaryVotes, $candidateNames);
        $broadcastingsecretaryVotes = $this->mapCandidateNames($broadcastingsecretaryVotes, $candidateNames);
        $educationsecretaryVotes = $this->mapCandidateNames($educationsecretaryVotes, $candidateNames);
        $sportsculturalsecretaryVotes = $this->mapCandidateNames($sportsculturalsecretaryVotes, $candidateNames);
        $publishingsecretaryVotes = $this->mapCandidateNames($publishingsecretaryVotes, $candidateNames);
        $hostingsecretaryVotes = $this->mapCandidateNames($hostingsecretaryVotes, $candidateNames);
        $assistantorganisingecretaryVotes = $this->mapCandidateNames($assistantorganisingecretaryVotes, $candidateNames);
        $assistanttreasurerVotes = $this->mapCandidateNames($assistanttreasurerVotes, $candidateNames);
        $firstexecutivememberVotes = $this->mapCandidateNames($firstexecutivememberVotes, $candidateNames);
        $secondexecutivememberVotes = $this->mapCandidateNames($secondexecutivememberVotes, $candidateNames);
        $thirdexecutivememberVotes = $this->mapCandidateNames($thirdexecutivememberVotes, $candidateNames);
        $fourthexecutivememberVotes = $this->mapCandidateNames($fourthexecutivememberVotes, $candidateNames);

        // Pass the data to the view
        return view('vooting.result', compact('presidentVotes', 'vicePresidentVotes', 'secretaryVotes', 'treasurerVotes', 'firstjointsecretaryVotes', 'secondjointsecretaryVotes', 'thirdjointsecretaryVotes', 'fourthjointsecretaryVotes', 'organisingsecretaryVotes', 'officesecretaryVotes', 'legalsocialsecretaryVotes', 'broadcastingsecretaryVotes', 'educationsecretaryVotes', 'sportsculturalsecretaryVotes', 'publishingsecretaryVotes', 'hostingsecretaryVotes', 'assistantorganisingecretaryVotes', 'assistanttreasurerVotes', 'firstexecutivememberVotes', 'secondexecutivememberVotes', 'thirdexecutivememberVotes', 'fourthexecutivememberVotes'));
    }

    // Helper function to map candidate keys to their real names
    private function mapCandidateNames(array $votes, array $candidateNames): array
    {
        $mappedVotes = [];

        foreach ($votes as $key => $count) {
            $name = $candidateNames[$key] ?? $key; // Default to key if name is missing
            $mappedVotes[$name] = $count;
        }
        return $mappedVotes;
    }

    // Convert candidate keys to names and images for display
    // function mapCandidateNames(array $votes, array $candidateNames): array {
    //     $mappedVotes = [];
    //     foreach ($votes as $key => $count) {
    //         if (isset($candidateNames[$key])) {
    //             $name = is_string($candidateNames[$key]['name']) ? $candidateNames[$key]['name'] : 'Unknown Candidate';
    //             $image = is_string($candidateNames[$key]['image']) ? $candidateNames[$key]['image'] : 'default-image.jpg';

    //             $mappedVotes[] = [
    //                 'name' => $name,
    //                 'image' => $image,
    //                 'votes' => $count,
    //             ];
    //         }
    //     }
    //     return $mappedVotes;
    // }


    public function validateID(Request $request)
    {
        $idNumber = $request->input('id_number');
        $validIDs = ["100", "101", "102", "103", "104", "105", "106", "107", "108", "109", "110", "111", "112", "113", "114", "115"];

        // Check if ID is valid
        if (in_array($idNumber, $validIDs)) {
            // Check if ID has already been used
            if (UsedId::where('id_number', $idNumber)->exists()) {
                return response()->json(['success' => false, 'message' => 'This ID has already been used.']);
            } else {
                // Mark ID as used
                UsedId::create(['id_number' => $idNumber]);
                return response()->json(['success' => true, 'redirect_url' => route('vooting')]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid ID number.']);
        }
    }



    public function VoteCompletedId(){
        // Retrieve and order by id in ascending order
        $votecompleteid = VootStore::orderBy('id', 'asc')->get();
        return view('vooting.votecompletedid', compact('votecompleteid'));
    }


    public function ThankYou(){
        return view('vooting.thankyou');
    }

}
