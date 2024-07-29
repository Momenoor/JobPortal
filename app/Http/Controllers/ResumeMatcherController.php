<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResumeMatcherController extends Controller
{
    public function match(Request $request)
    {
        $request->validate([
            'resume' => 'required',
        ]);

        $resumes = $request->input('resume');

        $response = Http::attach(
            'resume_file_path', $resumes
        );


        $response = $response->post('http://127.0.0.1:5002/api/matcher');
        if ($response->successful()) {
            return redirect('/matcher')->with([
                'message' => $response->json()['message'],
                'top_resumes' => $response->json()['top_resumes'],
                'similarity_scores' => $response->json()['similarity_scores'],
            ]);
        }

        return redirect('/matcher')->withErrors(['error' => 'Something went wrong.']);
    }
}
