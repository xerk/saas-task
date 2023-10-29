<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Fetch all tenants
     */
    public function index() {
        $tenants = Tenant::paginate(10);

        return response()->json($tenants);
    }
}
