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
        // Validate the input
        $validated = $request->validate([
            'id_number' => 'required|string|max:255', // Validate the voter_name
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
            'id_number' => $validated['id_number'], 
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

        return redirect()->route('vootingresult')->with('success', 'Your Vote Done successfully!');
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

}
