<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">Policies: <?= $policy->name ?></div>

        <div class="account__subtitle">Permissions</div>
        <policy-perm-table x-data="{item: <?= htmlspecialchars($permissions); ?>}" />
    </div>
</div>