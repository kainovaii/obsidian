<div class="content">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <js-component
                    name="policy/policy-info-table" 
                    styles="default" 
                    x-data="{item: <?= htmlspecialchars(json_encode($policy)); ?>}" 
                />
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3">     
                    <js-component
                        name="policy/policy-perm-table" 
                        styles="default" 
                        x-data="{item: <?= htmlspecialchars($permissions); ?>}"
                    />
                </div>
            </div>
        </div>
    </div>
</div>