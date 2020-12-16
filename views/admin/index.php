<h1>Welcome back admin</h1>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">description</th>
        <th scope="col">status</th>
        <th scope="col">изменить</th>
        <th scope="col">удалить</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $id => $post) : ?>
    <?php if ($post['status'] == 'true'):?>
    <tr class="table-success">
        <?php else :?>
    <tr class="table-danger">
        <?php endif;?>
        <th  scope="row"><?=$id + 1?></th>
        <td><?=$post['name']?></td>
        <td><?=$post['email']?></td>
        <td><?=$post['description']?></td>
        <td><?=$post['status']?></td>
        <form action="/admin/updateTask" method="post">
        <td><button type="submit"  class="btn btn-secondary" name="id" value="<?=$post['id']?>">update</button></td>
        </form>
        <form action="/admin/delete" method="post">
        <td><button type="submit"  class="btn btn-danger" name="id" value="<?=$post['id']?>">delete</button></td>
        </form>
        <?php endforeach ?>
    </tr>
    </tbody>
</table>