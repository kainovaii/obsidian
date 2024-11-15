<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">Roles</div>
        <js-component 
            name="setting/role-list-table" 
            styles="default" 
            x-data="{item: <?= htmlspecialchars(json_encode($roles)); ?>}"
        />
    </div>
</div>