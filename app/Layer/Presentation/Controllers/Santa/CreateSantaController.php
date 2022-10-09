<?php

namespace App\Layer\Presentation\Controllers\Santa;

use App\Layer\Domain\Santa\Dto\CreateSantaDto;
use App\Layer\Presentation\Controllers\Controller;
use App\Layer\Presentation\Requests\Santa\CreateSantaRequest;
use App\Layer\Presentation\View\Santa\SantaView;
use App\Layer\UseCase\Santa\CreateNewSantaUseCase;

class CreateSantaController extends Controller
{
    private CreateNewSantaUseCase $createNewSantaUseCase;

    public function __construct(CreateNewSantaUseCase $createNewSantaUseCase)
    {
        $this->createNewSantaUseCase = $createNewSantaUseCase;
    }

    public function create(CreateSantaRequest $createSantaRequest): \Illuminate\Http\JsonResponse
    {
        $validated = $createSantaRequest->validated();

        $createSantaDto = new CreateSantaDto(
            $validated[SantaView::SANTA_NAME]
        );

        $this->createNewSantaUseCase->create($createSantaDto);

        return response()->json([
            'status' => 'ok'
        ]);
    }
}
