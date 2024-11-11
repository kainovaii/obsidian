<div class="content">
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($policies as $policy) { ?>
                <tr>
                    <th scope="row"><?= $policy->id ?></th>
                    <td><?= $policy->name ?></td>
                    <td>
                        <a href="/policies/<?= $policy->name ?>">View</a>
                        <a href="/policies/<?= $policy->name ?>/edit">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>