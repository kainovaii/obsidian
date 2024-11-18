<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">
            <span>Edit: <?= $role->name ?></span>
            <div class="row mt-3">
                <div class="col-md-6">
                    <js-component name="global/form-input" styles="default" x-data="{type: 'text', name: 'name', value: '<?= $role->name ?>'}" />
                </div>
                <div class="col-md-6">
                    <js-component name="global/form-input" styles="default" x-data="{type: 'text', name: 'prefix', value: '<?= $role->prefix ?>'}" />
                </div>
                <div class="col-md-6 mt-3">
                    <js-component name="global/form-select" styles="default" x-data="{c1:{name: 'test', value: 'test'}, c2:{name: 'test', value: 'test'}, name: 'Policy'}" />
                </div>
            </div>
        </div>
    </div>
</div>