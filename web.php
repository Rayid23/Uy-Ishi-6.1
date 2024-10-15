<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\ErrorController;
use App\Controllers\TaskController;
use App\Controllers\UserController;
use App\Routes\Route;

#--------------------Авторизация-----------------------------------
Route::get("/", [AuthController::class,"loginPage"]); #Старница Логина
Route::get("/register", [AuthController::class,"registerPage"]); #Старница Регистрации
Route::get("/logout", [AuthController::class,"logout"]); #Старница Регистрации
Route::post("/login", [AuthController::class,"login"]); #Проверка
Route::post("/register", [AuthController::class,"register"]); #Добавить нового пользователя
#--------------------Ошибки-----------------------------------
Route::get("/404", [ErrorController::class,"error404"]); #404 Ошибка Нет такой страницы
Route::get("/403", [ErrorController::class,"error403"]); #403 Ошибка Нет разрещение на вход
#--------------------Админ панель-----------------------------------
Route::get("/adminTrello", [AdminController::class,"trello"]); #Панель Админа
Route::get("/AdminDispetcher", [AdminController::class,"dispetcher"]); #Панель Диспетчер задач Админа 
                                                                                       #Добавление задачы
Route::get("/AdminController", [AdminController::class,"controller"]); #Панель Контроль задач Админа 
Route::get("/AdminReports", [AdminController::class,"reports"]); #Панель Контроль задач Админа 
Route::get("/AdminUserPage", [AdminController::class,"allUsers"]); #Панель Список пользователей для Админа
Route::get("/AdminNewUser", [AdminController::class,"newUsers"]); #Панель Список новых пользователей для Админа 
#--------------------Панель Пользователя-----------------------------------
Route::get("/userReceived", [UserController::class,"kanban"]); #Панель Пользователя все задачи
Route::post("/UpdateStatusUser", [UserController::class,"update"]); #Обновление статуса пользователя
#--------------------Работа с Задачами-----------------------------------
Route::post("/NewTask", [TaskController::class,"create"]); #Панель Пользователя все задачи


?>