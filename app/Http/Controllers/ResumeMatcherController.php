<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResumeMatcherController extends Controller
{
    public function match(Request $request,Job $job)
    {

        $data = [
            'job_description'=> $job->description,
            'resumes' => $job->jobApplications->pluck('resume')->toArray(),
        ];
        //$response = Http::attach($data);


        $response = Http::post('http://127.0.0.1:5002/api/matcher',$data);
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
