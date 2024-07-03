<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Tag $tag)
    {
            $data = $request->validated();
            $tag = $this->service->update($data, $tag);
            $tags = Tag::all();
            return view ('admin.tags.index', compact('tag', 'tags'));
    }
}
