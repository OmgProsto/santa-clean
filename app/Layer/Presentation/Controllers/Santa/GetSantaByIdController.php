<?php

namespace App\Layer\Presentation\Controllers\Santa;

use App\Layer\Presentation\Controllers\Controller;
use App\Layer\Presentation\View\Santa\SantaView;
use App\Layer\UseCase\Santa\GetSantaByIdUseCase;

class GetSantaByIdController extends Controller
{
    private SantaView $santaView;
    private GetSantaByIdUseCase $getSantaByIdUseCase;

    public function __construct(SantaView $santaView, GetSantaByIdUseCase $getSantaByIdUseCase)
    {
        $this->santaView = $santaView;
        $this->getSantaByIdUseCase = $getSantaByIdUseCase;
    }

    public function get(int $id): \Illuminate\Http\JsonResponse
    {
        $santa = $this->santaView->toArray(
            $this->getSantaByIdUseCase->get($id)
        );

        return response()->json($santa);
    }
}
