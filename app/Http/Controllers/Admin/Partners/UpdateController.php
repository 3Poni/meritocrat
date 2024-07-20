<?php

namespace App\Http\Controllers\Admin\Partners;

use App\Http\Requests\Admin\Partner\UpdateRequest;
use App\Models\Partner;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Partner $partner)
    {
            $data = $request->validated();
            $partner = $this->service->update($data, $partner);

            return redirect()->route('admin.partner.edit', $partner->id);
    }
}
