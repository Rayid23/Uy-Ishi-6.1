<?php

namespace App\Controllers;

use App\Models\Task;
class TaskController
{
    public function create()
    {

        if (isset($_POST["AddTask"])) {

            $title = $_POST["title"];
            $description = $_POST["desc"];
            $userID = $_POST["UserId"];

            $image = $_FILES["image"]['type'];
            $type = explode('/', $image);

            $array = ['jpeg', 'png', 'jpg'];

            if (in_array($type[1], $array)) {
                $imageName = "Picture_" . $_FILES['image']['name'];
                $ImageNewPath = 'Images/' . $imageName;

                move_uploaded_file($_FILES['image']['tmp_name'], $ImageNewPath);

                $data = [
                    'title' => $title,
                    'description' => $description,
                    'image' => $ImageNewPath,
                    'user_id' => $userID,
                    'status' => 'send',
                    'comment' => null
                ];

                Task::Create($data);
                header('location: /AdminDispetcher');
            }
        }
    }

    public function update(){
        #Использовать switch-case для того чтоб было кароче код!

        if(isset($_POST['progress'])){

            $id = $_POST['task_id'];

            $data = [
                'status' => 'progress'
            ];

            Task::Update($id, $data);
            header('location: /userReceived');
        }
        elseif(isset($_POST['ready']))
        {
            $id = $_POST['task_id'];

            $data = [
                'status' => 'ready'
            ];

            Task::Update($id, $data);
            header('location: /userReceived');
        }
        elseif(isset($_POST['success']))
        {
            $id = $_POST['task_id'];

            $data = [
                'status' => 'success'
            ];

            Task::Update($id, $data);
            header('location: /AdminController');
        }
        else{
            header('location: /userReceived');
        }
    }
}
