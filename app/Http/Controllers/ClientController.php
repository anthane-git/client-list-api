<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Traits\UserClaims;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Client Management
 *
 * API to manage the client resource.
 */
class ClientController extends Controller
{
    use UserClaims;

    /**
     * Create the controller instance.
     */
    public function __construct(Client $client)
    {
        $this->authorizeResource($client::class);
    }

    /**
     * Display a listing of the clients.
     *
     * @queryParam page_size int Size per page. Defaults to 20.
     * @queryParam page int int Page to view.
     * @apiResourceCollection App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function index(Request $request)
    {
        $limit = $request->page_size ?? 20;

        $clients = Client::query()
            ->with('company')
            ->whereHas('user', function (Builder $query) {
                return $query->where('uuid', $this->getUserUUID());
            })->paginate($limit);

        return ClientResource::collection($clients);
    }

    /**
     * Show the form for creating a new client.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function create(Client $client): ClientResource
    {
        return new ClientResource($client);
    }

    /**
     * Store a newly created client in storage.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function store(StoreClientRequest $request): ClientResource
    {
        $created = Client::create($request->getAttributes());

        return new ClientResource($created);
    }

    /**
     * Display the specified client.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function show(Client $client): ClientResource
    {
        return new ClientResource($client);
    }

    /**
     * Show the form for editing the specified client.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function edit(Client $client): ClientResource
    {
        return new ClientResource($client);
    }

    /**
     * Update the specified client in storage.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function update(Request $request, Client $client): ClientResource | JsonResponse
    {
        $updated = $client->update([
            'email' => $request->email ?? $client->email,
            'first_name' => $request->first_name ?? $client->first_name,
            'last_name' => $request->last_name ?? $client->last_name,
            'primary_phone' => $request->primary_number ?? $client->primary_number,
            'secondary_phone' => $request->secondary_number ?? $client->secondary_number,
            'timezone' => $request->timezone ?? $client->timezone,
            'company_id' => $request->company_id ?? $client->company_id,
        ]);

        if (! $updated) {
            return new JsonResponse([
                'errors' => 'Failed to updated model.',
            ], 400);
        }

        return new ClientResource($updated);
    }

    /**
     * Remove the specified client from storage.
     *
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function destroy(Client $client): JsonResponse
    {
        $deleted = $client->forceDelete();

        if (! $deleted) {
            return new JsonResponse([
                'errors' => 'Failed',
            ]);
        }

        return new JsonResponse([
            'status' => 'success',
        ]);
    }
}
