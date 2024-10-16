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
                            <th scope="col">ОПЦИЯ</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        foreach ($models as $user) { ?>
                            <tr>
                                <th class="wid"><?= $user->id ?></th>
                                <td class="wid"><?= $user->name ?></td>
                                <td class="wid"><?= $user->email ?></td>
                                <td class="wid">
                                    <form action="/AdminReports" method="POST" style="display:inline-block;">
                                        <input type="hidden" name="user_id" value="<?= $user->id ?>">
                                        <button class="btn btn-info" name="read" type="submit">Войти</button>
                                    </form>
                                    <a class="btn btn-warning">Ограничать</a>
                                    <a class="btn btn-danger">Бан</a>

                                </td>
                            </tr>
                        <?php }

                        ?>



                    </tbody>
                </table>
            </div>

            <div>
                <div class="card" style="width: 67rem;">
                    <div class="card-header">
                        <h3>Онлайн чат</h3>
                    </div>
                    <div class="card-body">
                        <label from="message">Александр: </label>

                        <div style="border:1px solid aqua; width:600px; height:50px; color:blue; border-radius:30px" class="text-center">
                            <p id="message" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <br>
                        <label from="message2">Настя: </label>

                        <div style="border:1px solid aqua; width:600px; height:auto; color:blue; border-radius:30px" class="text-center">
                            <p id="message2" class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio ipsam totam quis alias laboriosam, velit omnis dolores dolor doloremque, itaque error corporis, ab magnam voluptatibus impedit fugit ad soluta provident. quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>



                </div>
                <form style="display:inline" align="center" style="display:inline-block;">
                    <textarea style="height:100px" rows="2" cols="139" placeholder="Напишите что-нибудь!"></textarea>
                    <a class="btn btn-primary" style="margin-bottom:50px"><i class="bi bi-send"></i></a>
                </form>
            </div>

        </div>


    </section>

</div>