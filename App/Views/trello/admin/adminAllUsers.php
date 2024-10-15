<div class="content-wrapper">


    <section class="content">
        <h3 class="text-center mt-2 text-primary">Пользователи</h3>

        <div class="container-fluid">
            <div class="row text-center mt-4">

                <table class="table border table-primary table-bordered" style="width:1100px">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ИМЯ</th>
                            <th scope="col">ЛОГИН</th>
                            <th scope="col">СТАТУС</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        foreach ($models as $user) { ?>
                            <tr>
                                <th scope="row"><?=$user->id?></th>
                                <td><?=$user->name?></td>
                                <td><?=$user->email?></td>
                                <td><?=$user->status?></td>
                            </tr>
                        <?php }

                        ?>



                    </tbody>
                </table>
            </div>

        </div>


    </section>

</div>