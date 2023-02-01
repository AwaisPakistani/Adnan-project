<?php 

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\front\FrontRoleController;
use App\Http\Controllers\front\FrontPermissionController;


// Roles

Route::match(['get','post'],'/front/add_front_role',[FrontRoleController::class,'add_front_role'])->name('front.add_role')->middleware('permission:add');

Route::get('/front/view_front_roles', [FrontRoleController::class, 'view_front_roles'])->name('front.view_roles')->middleware('permission:view');

Route::get('/front/delete_role/{id}', [FrontRoleController::class, 'delete_role'])->name('front.delete_role')->middleware('permission:delete');

Route::match(['get','post'],'/front/edit_front_role/{id}',[FrontRoleController::class,'edit_front_role'])->name('front.edit_role')->middleware('permission:edit');

// Permissions

Route::match(['get','post'],'/front/add_front_permission',[FrontPermissionController::class,'add_front_permission'])->name('front.add_permission')->middleware('permission:add');

Route::get('/front/view_front_permissions', [FrontPermissionController::class, 'view_front_permissions'])->name('front.view_permissions')->middleware('permission:view');

Route::get('/front/delete_permission/{id}', [FrontPermissionController::class, 'delete_permission'])->name('front.delete_permission')->middleware('permission:delete');

Route::match(['get','post'],'/front/edit_front_permission/{id}',[FrontPermissionController::class,'edit_front_permission'])->name('front.edit_permission')->middleware('permission:edit');




