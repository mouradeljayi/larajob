<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoverLetter;
use App\Models\Proposal;
use App\Models\Job;

class ProposalController extends Controller
{
    public function store(Request $request, Job $job)
    {
      $proposal = Proposal::create([
        'job_id' => $job->id,
        'validated' => false
      ]);

      CoverLetter::create([
        'proposal_id' => $proposal->id,
        'content' => $request->input('content')
      ]);

      return redirect()->route('jobs.index');
    }
}
