<?php

//student login student_login
Route::get('/', function () {
    return view('student_login');
});
Route::post('/student_login', 'login_student@login'); 

//Student Feedback
Route::get('/student_page', 'feedback@feedback_start');
Route::get('/feedback/{id}', 'feedback@teacher_info');
Route::post('/save_feedback', 'feedback@save_feedback');
Route::post('/student_edition', 'feedback@edit');
Route::post('/student_updated/{id}', 'feedback@update_student');

//teacher login
Route::get('/teacher_login', 'teacher_login@show_login');
Route::post('/teacher_sign_in', 'teacher_login@login');
//teacher logout 
Route::get('/logout_teacher', 'teacher_login@logout');

//teacher info
Route::get('/teacher_info', 'teacher@show');
Route::post('/performance', 'teacher@result_of_preformance_show');
Route::get('/performance_teacher/{id}', 'teacher@detail');
Route::get('/edition_teacher/{id}', 'teacher@edit_teachers');
Route::post('/updated_teachers/{id}', 'teacher@update_teachers');


//Admin Part
//admin login
Route::get('/backend', function () {
    return view('admin.admin_login');
});
Route::post('/adminlogin', 'AdminController@login_dashboard'); 
Route::get('/admin_dashborad', 'AdminController@admin_dashboard');

//add teacher
Route::get('/addteachers', 'add_teachers@addteachers');
Route::post('/save_teachers', 'add_teachers@save_teachers');

//view all teacher
Route::get('/allteachers', 'allteachers@allteachers');
Route::post('/allteachers', 'allteachers@Search');
//teacher_edit
Route::get('/teacher_edit/{id}', 'edit_teachers@edit_teachers');
Route::post('/update_teachers/{id}', 'edit_teachers@update_teachers');
//teacher_delete
Route::get('/teacher_delete/{id}', 'delete_teachers@teacher_delete');


//student insert addstudents_day
Route::get('/addstudents_day', 'students@day_batch');
Route::post('/save_students', 'students@save_students_day');
//all student view 
Route::get('/allstudents', 'students@day_batch_all_students');
//search student view
Route::post('/allstudents', 'students@Search');
//update student
Route::get('/student_edit/{id}', 'students@edit_students');
Route::post('/student_update/{id}', 'students@update_student');

//delete student
Route::get('/student_delete/{id}', 'students@studnt_del');
//question part
Route::get('/question', 'question@show');
//add question
Route::post('/question', 'question@add');
//all question
Route::get('/allquestion', 'question@allquestion');
//edit question
Route::get('/question_edit/{id}', 'question@edit_question');
Route::post('/question_update/{id}', 'question@update_question');
//delete question
Route::get('/question_delete/{id}', 'question@question_delete');

//All teachers results
Route::get('/result', function () {
    return view('result.login');
});
//login of senior teacher
Route::post('/senior_teacher_sign_in', 'result@login_senior');
Route::get('/result_info', 'result@index');
Route::get('/details/{id}', 'result@detail');
Route::post('/result_info', 'result@Search');

//Admin logout
Route::get('/logout', 'AdminController@logout');
Route::get('/logout_student', 'Logout@student');
Route::get('/logout_senior_teacher', 'Logout@Senior_teacher');

