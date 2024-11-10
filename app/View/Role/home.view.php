<div class="content">
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Policy</th>
                <th scope="col">Prefix</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roles as $role) { ?>
                <tr>
                    <th scope="row"><?= $role->id ?></th>
                    <td><?= $role->name ?></td>
                    <td><?= $role->policy ?></td>
                    <td><?= $role->prefix ?></td>
                    <td>
                        <a href="/roles/<?= $role->name ?>">View</a>
                        <a href="/roles/<?= $role->name ?>/edit">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>