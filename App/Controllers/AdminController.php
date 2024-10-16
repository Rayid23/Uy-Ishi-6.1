<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Task;

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
        $data = Task::SelectToQuery('SELECT task.id, task.title, task.description, task.image, user.name, user.id as user_id, task.status, task.comment FROM task LEFT JOIN user ON task.user_id = user.id');

        $data['send'] = count(Task::WhereCol('status', '=', 'send'));
        $data['ready'] = count(Task::WhereCol('status', '=', 'ready'));
        $data['progress'] = count(Task::WhereCol('status', '=', 'progress'));
        $data['success'] = count(Task::WhereCol('status', '=', 'success'));
        $data['cancel'] = count(Task::WhereCol('status', '=', 'cancel'));
        $data['time'] = 0;
        $data['AllUsers'] = count(User::SelectAll(1));
        $data['notActiveUsers'] = count(User::WhereCol('status', '=', 'Не принята')); 

        return view("trello/admin/adminTrello", 'Менеджмент задач', $data, 'main.php');
    }
    public function dispetcher()
    {
        $_SESSION['PanelActive'] = 2;
        $data = User::WhereCol('status', '=', 'Принята');
        return view("trello/admin/adminDispetcher", 'Диспетчер задач', $data, 'main.php');
    }
    public function controller()
    {
        $data = User::WhereCol('status', '=', 'Принята');

        $_SESSION['PanelActive'] = 3;
        return view("trello/admin/adminControl", 'Управление командой', $data, 'main.php');
    }
    public function reports()
    {
        if(isset($_POST['read'])){
            $data = Task::WhereCol2('user_id', '=', $_POST['user_id'], 'status', '=', 'ready');
        }
        $_SESSION['PanelActive'] = 4;
        return view("trello/admin/adminReports", 'test', $data, 'main.php');
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
