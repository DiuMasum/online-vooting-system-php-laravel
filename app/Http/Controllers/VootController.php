<?php

namespace App\Http\Controllers;

use App\Models\Vooting;
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
            'president' => 'array|max:2',
            'vice_president' => 'array|max:5',
            'secretary' => 'array|max:2',
        ]);

        // Save the vote in the database
        Vooting::create([
            'president' => $validated['president'] ?? [],
            'vice_president' => $validated['vice_president'] ?? [],
            'secretary' => $validated['secretary'] ?? [],
        ]);

        return back()->with('success', 'Vote submitted successfully!');
    }

    public function VootingResult()
    {
        // Mapping candidate keys to their real names
        $candidateNames = [
            'first_president' => 'Sibbir Ahmed',
            'second_president' => 'Tuhin Kalimullah',
            'first_vice_president' => 'Abir Hossain Talukder',
            'second_vice_president' => 'Farhana Islam Tamanna',
            'third_vice_president' => 'Md Mizanur Rahman',
            'fourth_vice_president' => 'Muhammad Jubayer Hossain',
            'fifth_vice_president' => 'Sadiul Islam Hridoy',
            'sixth_vice_president' => 'Md Nazmul Hasan Sarker',
            'seven_vice_president' => 'Muneem Mahidee',
            'first_secretary' => 'Zayed Bin Naser',
            'second_secretary' => 'Md Mizanur Rahman',
        ];

        // Fetch all votes from the 'vootings' table
        $allVotes = Vooting::all();

        // Initialize vote counts
        $presidentVotes = [];
        $vicePresidentVotes = [];
        $secretaryVotes = [];

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
        }

        // Convert candidate keys to names for displaying
        $presidentVotes = $this->mapCandidateNames($presidentVotes, $candidateNames);
        $vicePresidentVotes = $this->mapCandidateNames($vicePresidentVotes, $candidateNames);
        $secretaryVotes = $this->mapCandidateNames($secretaryVotes, $candidateNames);

        // Pass the data to the view
        return view('vooting.result', compact('presidentVotes', 'vicePresidentVotes', 'secretaryVotes'));
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
}
