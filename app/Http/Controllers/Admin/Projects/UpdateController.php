<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Project $project)
    {
            $data = $request->validated();
            $project = $this->service->update($data, $project);

            return redirect()->route('admin.project.edit', $project->id);
    }
}
