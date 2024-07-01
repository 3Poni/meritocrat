<?php

namespace App\Http\Controllers\Admin\Newsletters;

use App\Http\Requests\Admin\Newsletter\UpdateRequest;
use App\Models\Newsletter;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Newsletter $newsletter)
    {
            $data = $request->validated();
            $newsletter = $this->newsletter->update($data, $newsletter);

            return view ('admin.newsletters.show', compact('newsletter'));
    }
}
