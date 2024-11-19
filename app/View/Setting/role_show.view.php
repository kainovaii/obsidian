<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">
            <span>Edit: <?= $role->name ?></span>
            <div class="row mt-3">
                <div class="col-md-6">
                    <form-input x-data="{type: 'text', name: 'name', value: '<?= $role->name ?>'}" />
                </div>
                <div class="col-md-6">
                    <form-input x-data="{type: 'text', name: 'prefix', value: '<?= $role->prefix ?>'}" />
                </div>
                <div class="col-md-6 mt-3">
                    <form-select x-data="{name: 'Policy', choices: [{name: 'test1', value: 'test1'}, {name: 'test2', value: 'test2'}]}" />
                </div>
            </div>
        </div>
    </div>
</div>