<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::get('profile/history', 'ProfileController@history')->name('profile.history');
    Route::put('profile', 'ProfileController@update')->name('profile.update');

    Route::get('password', 'PasswordController@edit')->name('password.edit');
    Route::put('password', 'PasswordController@update')->name('password.update');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'backend.'], function(){

    require(__DIR__. '/backend/master.php');

    Route::group(['namespace' => 'Intern'], function () {

        /** K06 - ADM **/
//        Route::post('intern-proposals/filter', 'InternshipProposalController@filter')->name('intern-proposals.filter');
//        Route::get('intern-proposals/{id}/surattugas', 'InternshipProposalController@surattugas')->name('intern-proposals.surattugas');
//        Route::get('intern-proposals/{id}/suratpermohonan', 'InternshipProposalController@surattugas')->name('intern-proposals.suratpermohonan');
//        Route::resource('intern-proposals', 'InternshipProposalController')->only(['index', 'show']);
//        Route::resource('intern-acceptance', 'InternshipAcceptanceController')->only(['edit', 'update']);
//        Route::get('intern-supervisors/mass-edit', 'InternshipSupervisorController@mass_edit')->name('intern-supervisors.mass_edit');
//        Route::put('intern-supervisors/mass_update', 'InternshipSupervisorController@mass_update')->name('intern-supervisors.mass_update');
//        Route::resource('intern-supervisors', 'InternshipSupervisorController')->only(['index']);

        /** K07 - ADM */
    Route::post('interns/filter', 'InternshipController@filter')->name('interns.filter');
    Route::resource('interns', 'InternshipController')->except(['destroy','create', 'store']);
    Route::resource('intern-seminars', 'InternshipSeminarController')->only(['show', 'edit', 'update']);
    Route::resource('intern-seminars.audiences', 'InternshipSeminarAudienceController')->only(['create', 'store']);

    });

    Route::group(['namespace' => 'Publication'], function () {
        /** K08 - ADM */
//        Route::resource('publications', 'PublicationController')->only(['index']);
//        Route::resource('pub-proceedings', 'PubProceedingController')->except(['index', 'destroy', 'show']);
//        Route::resource('pub-journals', 'PubJournalController')->except(['index', 'destroy', 'show']);
//        Route::resource('publications.authors', 'PublicationAuthorController')->only(['create', 'store', 'destroy']);

    });

    Route::group(['namespace' => 'Academic'], function () {

        /** K09 - ADM */
        Route::resource('courses', 'CourseController');
        Route::resource('curricula', 'CurriculumController')->except(['show']);

        /** K10 - ADM */
//        Route::get('classrooms/{id}/print', 'ClassroomController@print')->name('classrooms.print');
//        Route::resource('classrooms', 'ClassroomController');
//        Route::resource('classrooms.students', 'ClassroomStudentController')->only(['create', 'store', 'destroy']);

        /** K11 - ADM */
//        Route::post('semesters', 'SemesterController@activate')->name('semesters.activate');
//        Route::resource('semesters', 'SemesterController')->except(['show', 'destroy']);
//        Route::resource('schedules', 'ScheduleController')->except(['show']);


    });

});

Route::group(['middleware' => 'auth', 'namespace' => 'Frontend', 'as' => 'frontend.'], function (){

    Route::group(['namespace' => 'Intern'], function () {

        /** K01 - MHS */
    Route::resource('myintern-proposals', 'MyInternProposalController');
//    Route::resource('myintern-proposals.members', 'MyInternProposalMemberController')->only(['create', 'store', 'destroy']);
//    Route::resource('myintern-acceptances', 'MyInternAcceptanceController')->only(['edit', 'update']);

        /** K02 - MHS */
//    Route::resource('myinterns', 'MyInternController')->only(['index', 'show']);
//    Route::resource('myintern-seminars', 'MyInternSeminarController')->except(['index', 'destroy']);
//    Route::resource('myintern-seminars.audiences', 'MyInternSeminarAudience')->only(['create', 'store', 'destroy']);

        /** K03 - MHS */
//    Route::resource('myinterns', 'MyInternController')->except(['destroy', 'create', 'store']);
//    Route::resource('myinterns.logbooks', 'MyInternLogbookController');

        /** K04 - KAPRODI */
//    Route::resource('internship-submission', 'InternshipSubmissionController')->only(['index', 'edit', 'update']);
//    Route::resource('internships', 'InternshipController')->only(['index', 'show']);
//    Route::resource('internship-supervisors', 'InternshipSupervisorController')->only(['create', 'store', 'destroy']);
//    Route::resource('internship-cancellation', 'InternshipCancellationController')->only(['edit', 'update']);

        /** K05 - DSN */
//    Route::resource('interns', 'InternController')->only(['index', 'show']);
//    Route::get('intern-grades/{id}/print', 'InternGradeController@print')->name('intern-grades.print');
//    Route::resource('intern-grades', 'InternGradeController')->only(['edit', 'update']);
//    Route::resource('interns.logbooks', 'InternLogbookController')->except(['destroy', 'create', 'store']);

    });


});
