<?php

namespace App\Controllers;

use App\Models\User;

class AdminController
{
    public function __construct()
    {
        $_SESSION['PanelActive'] = '0';
        unset($_SESSION["message"]);

        if (auth()) {
            if (auth()->role != "admin") {
                header("location: /403");
            }
        } else {
            $_SESSION['message'] = "Войдите в аккаунт или создайте новую!";
            header("location: /");
        }
    }
    public function trello()
    {
        $_SESSION['PanelActive'] = 1;
        return view("trello/admin/adminTrello", 'Менеджмент задач', '', 'main.php');
    }
    public function dispetcher()
    {
        $_SESSION['PanelActive'] = 2;
        $data = User::WhereCol('status', '=', 'Принята');
        return view("trello/admin/adminDispetcher", 'Диспетчер задач', $data, 'main.php');
    }
    public function controller()
    {
        $_SESSION['PanelActive'] = 3;
        return view("trello/admin/adminControl", 'test', '', 'main.php');
    }
    public function reports()
    {
        $_SESSION['PanelActive'] = 4;
        return view("trello/admin/adminControl", 'test', '', 'main.php');
    }

    public function allUsers()
    {
        $_SESSION['PanelActive'] = 6;
        $data = User::SelectAll(1);
        return view("trello/admin/adminAllUsers", 'Пользователи', $data, 'main.php');
    }
    public function newUsers()
    {
        $_SESSION['PanelActive'] = 7;
        $data = User::WhereCol('status', '=', 'Не принята');
        return view("trello/admin/adminNewUsers", 'Новые пользователи', $data, 'main.php');
    }
}
