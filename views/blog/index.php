
<h1>TODO list</h1>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">description</th>
        <th scope="col">status</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $id => $post) : ?>
    <?php if ($post['status'] == 'true'):?>
    <tr class="table-success">
    <?php else :?>
    <tr class="table-danger">
        <?php endif;?>
            <th  scope="row"><?=$id ?></th>
            <td><?=$post['name']?></td>
            <td><?=$post['email']?></td>
            <td><?=$post['description']?></td>
            <td><?=$post['status']?></td>
        <?php endforeach ?>
    </tr>
    </tbody>
</table>