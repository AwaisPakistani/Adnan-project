<?php 

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\front\FrontRoleController;
use App\Http\Controllers\front\FrontPermissionController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\front\JournalController;
use App\Http\Controllers\front\FrontJournalController;

Route::get('/', [IndexController::class, 'index']);
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
//////////////////////
////////Pages/////////
//////////////////////

// Contact Page
Route::get('contact-page',[PageController::class,'contact_page'])->name('front.contact_page');
// Get pages
Route::get('page/{url}',[PageController::class,'front_page'])->name('front.page.url');
// contact form 
Route::post('/front/contact_form',[PageController::class,'contact_form'])->name('front.contact_form');

 // chiefeditor
           
 Route::match(['get', 'post'], '/add-chiefeditor', [FrontRoleController::class, 'add_chiefeditor'])->name('front.add_chiefeditor')->middleware('permission:add');

 Route::match(['get', 'post'], '/edit-chiefeditor/{id}', [FrontRoleController::class, 'edit_chiefeditor'])->name('front.edit_chiefeditor')->middleware('permission:edit');

 Route::get('/view-chiefeditors', [FrontRoleController::class, 'view_chiefeditors'])->name('front.view_chiefeditors')->middleware('permission:view');

 Route::get('/delete-chiefeditor/{id}', [FrontRoleController::class, 'delete_chiefeditor'])->name('front.delete_chiefeditor')->middleware('permission:delete');

 Route::get('/delete-chief-image/{id}', [FrontRoleController::class, 'delete_chief_image'])->name('front.delete_chief_image')->middleware('permission:edit|delete');

 Route::match(['get', 'post'], '/change-chief-password/{id}', [FrontRoleController::class, 'change_chief_password'])->name('front.change_chief_password')->middleware('permission:edit');

 // Journals
 Route::match(['get', 'post'], '/add-journal', [JournalController::class, 'add_journal'])->name('front.add_journal')->middleware('permission:add');

 Route::match(['get', 'post'], '/edit-journal/{id}', [JournalController::class, 'edit_journal'])->name('front.edit_journal')->middleware('permission:edit');

 Route::get('/view-journals', [JournalController::class, 'view_journals'])->name('front.view_journals')->middleware('permission:view');

 Route::get('/delete-journal/{id}', [JournalController::class, 'delete_journal'])->name('front.delete_journal')->middleware('permission:delete');
 // Delete journal More Info
 Route::get('/delete-journal-moreinfo/{id}', [JournalController::class, 'delete_journal_moreinfo'])->name('front.journal.delete_moreinfo')->middleware('permission:edit|delete');
// front.journal.delete_author_guideline
Route::get('/delete-journal-author-guideline/{id}', [JournalController::class, 'delete_journal_author_guideline'])->name('front.journal.delete_author_guideline')->middleware('permission:edit|delete');

// Categories

Route::get('/view-category-detail/{id}', [IndexController::class, 'view_category_detail'])->name('front.view_category_detail');

// Journals
Route::get('/view-journal-detail/{id}', [FrontJournalController::class, 'view_journal_detail'])->name('front.journal_detail');

Route::match(['get', 'post'], '/chiefeditor-login/{id}', [FrontJournalController::class, 'chiefeditor_login'])->name('front.chiefeditor.login');
Route::match(['get', 'post'], '/chiefeditor-signin/{id}', [FrontJournalController::class, 'chiefeditor_login_form'])->name('front.chiefeditor_login');

// front.chiefeditor.dashboard
Route::get('/chiefeditor-dashboard/{journal}', [FrontJournalController::class, 'chiefeditor_dashboard'])->name('front.chiefeditor.dashboard');

// Journal Volumes
Route::match(['get', 'post'], '/add-journal-volume/{journal}', [FrontJournalController::class, 'add_journal_volume'])->name('front.add_journal_volume');