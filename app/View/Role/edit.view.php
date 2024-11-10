<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/api/roles/edit" method="POST">
                <input type="hidden" name="name" value="<?= $role->name ?>">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $role->name ?>">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label>Prefix</label>
                            <input class="form-control" type="text" name="prefix" value="<?= $role->prefix ?>">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label>Policy <a class="link-offset-2 link-underline link-underline-opacity-0" href="/policies">edit</a></label>
                            <select class="form-control" name="policy">
                                <?php foreach ($policies as $policy) { ?>
                                    <?php if ($policy->name === $role->policy) { ?>
                                    <option value="<?= $policy->name ?>" selected><?= $policy->name ?></option>
                                    <?php } ?>
                                    <?php if ($policy->name != $role->policy) { ?>
                                    <option value="<?= $policy->name ?>"><?= $policy->name ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>