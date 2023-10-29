<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($tenantId)
    {
        // Find the tenant by ID
        $tenant = Tenant::find($tenantId);

        if (!$tenant) {
            return response()->json(['message' => 'Tenant not found'], 404);
        }

        // Retrieve all users belonging to the specified tenant
        $users = $tenant->users;

        return response()->json($users);
    }
}
