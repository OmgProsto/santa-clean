<?php

namespace App\Layer\Presentation\Requests\Santa;

use App\Layer\Presentation\View\Santa\SantaView;
use Illuminate\Foundation\Http\FormRequest;

class CreateSantaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            SantaView::SANTA_NAME => 'required|string',
        ];
    }
}
