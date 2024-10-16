<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Задачи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/test">Задачи</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=$models['send']?></h3>

                            <p>Подтверждения</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pin"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?=$models['progress']?><sup style="font-size: 20px"></sup></h3>

                            <p>В Прогрессе</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?=$models['ready']?></h3>

                            <p>Готовые</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark-round"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=$models['success']?></h3>

                            <p>Принятые</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-thumbsup"></i>

                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?=$models['cancel']?></h3>

                            <p>Не принятые</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-close"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3><?=$models['time']?></h3>

                            <p>Ожидаемые</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-clock"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color:aqua">
                        <div class="inner">
                            <h3><?=$models['AllUsers']?></h3>

                            <p>Все пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=$models['notActiveUsers']?></h3>

                            <p>Добавить пользователя</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробности <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row mt-4">

                <div class="col-12">
                    <a class="btn btn-primary">Добавить задачу</a>
                    <a class="btn btn-danger">Удалить все задачи</a>
                    <a class="btn btn-warning">Очистить</a>

                </div>

                <table class="table border table-primary table-bordered mt-2" style="width:1100px">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ЗАГОЛОВОК</th>
                            <th scope="col">ОПИСАНИЕ</th>
                            <th scope="col">КАРТИНКА</th>
                            <th scope="col">ПОЛЬЗОВАТЕЛЬ</th>
                            <th scope="col">СТАТУС</th>
                            <th scope="col">КОММЕНТАРИЯ</th>
                            <th scope="col">ОПЦИИ</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        foreach ($models as $task) {
                            if(gettype($task) != "object"){
                                break;
                            }
                            ?>
                            <tr>
                                <th class="wid" scope="row"><?= $task->id ?></th>
                                <td class="wid"><?= $task->title ?></td>
                                <td class="wid"><?= mb_substr($task->description, 0, 50) ?></td>
                                <td class="wid"><img src="<?= $task->image ?>" width="100px" style="border:2px solid black; border-radius:30px; border-color:blue"></td>
                                <td class="wid text-center"><?= $task->name ?></td>
                                <td class="wid">
                                    <a class="btn btn-success">
                                        <?= $task->status ?>
                                    </a>
                                </td>
                                <td class="wid"><?= $task->comment ?></td>


                                <td>
                                    <a class="btn btn-primary"><i class="bi bi-vector-pen"></i></a>
                                    <a class="btn btn-info"><i class="bi bi-journal-album"></i></a>
                                    <a class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>

                            </tr>
                        <?php }

                        ?>



                    </tbody>
                </table>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->