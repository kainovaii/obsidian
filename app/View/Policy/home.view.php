<div class="content">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <js-component
                    name="policy/policy-list-table" 
                    styles="default" 
                    x-data="{item: <?= htmlspecialchars(json_encode($policies)); ?>}" 
                />
            </div>
        </div>
    </div>
</div>