<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/students',[StudentController ::class,'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/search/{fullName}',[StudentController::class,'search']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::get('/courses/search/{name}',[CourseController::class,'search']);

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::get('/employees/search/{fullName}',[EmployeeController::class,'search']);

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/{id}', [SubjectController::class, 'show']);
Route::get('/subjects/search/{subjectName}',[SubjectController::class,'search']);

Route::get('/sessions', [SessionController::class, 'index']);
Route::get('/sessions/{id}', [SessionController::class, 'show']);
Route::get('/sessions/search/{sessionName}',[SessionController::class,'search']);


Route::group(['middleware' => ['auth:sanctum']], function () {
       
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/students',[StudentController ::class,'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);

    Route::post('/courses', [CourseController::class, 'store']);
    Route::put ('/courses/{id}',[CourseController::class,'update']);
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

    Route::post('/employees', [EmployeeController::class, 'store']);
    Route::put('/employees/{id}', [EmployeeController::class, 'update']);
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

    Route::post('/subjects', [EmployeeController::class, 'store']);
    Route::put('/subjects/{id}', [EmployeeController::class, 'update']);
    Route::delete('/subjects/{id}', [EmployeeController::class, 'destroy']);

    Route::post('/sessions', [SessionController::class, 'store']);
    Route::put('/sessions/{id}', [SessionController::class, 'update']);
    Route::delete('/sessions/{id}', [SessionController::class, 'destroy']);

});
