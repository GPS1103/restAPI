<?php

namespace App\Http\Controllers\Api\Movie;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\MovieTypeRequest;
use App\Http\Resources\Movie\MovieType as MovieTypeResource;
use App\Http\Resources\Movie\MovieTypeCollection;
use App\Models\MovieType;
use Illuminate\Http\JsonResponse;

/**
 * @group MovieType
 */
class MovieTypeController extends Controller
{
     /**
     *  Endpoint for listing all MovieTypes to user.
     *
     * @response 401 {"message": "Unauthenticated."}
     * @apiResourceCollection App\Http\Resources\MovieType\MovieTypeCollection
     * @apiResourceModel App\Models\MovieType
     */
    public function index(): MovieTypeCollection
    {
        $this->authorize('worker-can');

        return new MovieTypeCollection(MovieType::all());
    }

    /**
     *  Endpoint for storing new MovieType by admin.
     *
     * @response 401 {"message": "Unauthenticated."}
     * @apiResource App\Http\Resources\MovieType\MovieType
     * @apiResourceModel App\Models\MovieType
     */
    public function store(MovieTypeRequest $request): MovieTypeResource
    {
        $this->authorize('admin-can');

        return new MovieTypeResource(MovieType::create($request->validated()));
    }

    /**
     *  Endpoint for updating MovieType by admin.
     *
     * @urlParam cost_category integer required ID of MovieType model
     * @response 401 {"message": "Unauthenticated."}
     * @apiResource App\Http\Resources\MovieType\MovieType
     * @apiResourceModel App\Models\MovieType
     */
    public function update(MovieTypeRequest $request, MovieType $movieType): MovieTypeResource
    {
        $this->authorize('admin-can');
        $movieType->update($request->validated());

        return new MovieTypeResource(
            $movieType->fresh()
        );
    }

    /**
     * Endpoint for removing MovieType by admion.
     *
     * @urlParam cost_category integer required ID of MovieType model
     * @response 401 {"message": "Unauthenticated."}
     * @response {"message": "Successfully deleted MovieType"}
     */
    public function destroy(MovieType $movieType): JsonResponse
    {
        $movieType->delete();
        return response()->json([
            'message' => 'Successfully deleted MovieType',
        ], 200);
    }
}
