<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;

Route::get('/tenants/{tenant_id}/users', [UserController::class, 'index']);
Route::get('/tenants', [TenantController::class, 'index']);

