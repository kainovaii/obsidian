<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/api/policies/edit" method="POST">
                <input type="hidden" name="name" value="<?= $policy->name ?>">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?= $policy->name ?>">
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