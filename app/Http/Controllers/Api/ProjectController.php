<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Projects;
use App\Model\ProjectsSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        Log::info('project store: start');
        try {
            $status = 1;
            if ($request->status) {
                $status = 0;
            }
            $data = [
                'project_name' => $request->project_name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'priority' => $request->priority,
                'status' => $status,
            ];
            $projectData = Projects::create($data);
            $projectId = $projectData->id;

            foreach ($request->skill as $value) {
                ProjectsSkill::create([
                    'skill' => $value,
                    'projects_id' => $projectId
                ]);
            }

            Log::info('project store: finish');
            return response()->json([
                'status' => 200,
                'message' => 'This information has been saved',
            ]);
        } catch (\Exception $exception) {
            Log::info('project store: Exception');
            Log::info($exception);
            return response()->json([
                'status' => 500,
                'message' => 'This information has been not saved',
            ]);
        }
    }
}
