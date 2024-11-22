<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">Policies: <?= $policy->name ?></div>
        <section class="mb-4">
            <div class="account__subtitle">Informations</div>
            <form-input x-data="{type: 'text', name: 'name', value: '<?= $policy->name ?>'}" />
        </section>
        <section>
            <div class="account__subtitle">Permissions</div>
            <form action="/api/policies/edit" method="POST">
                <input type="hidden" name="policy_name" value="<?= $policy->name ?>">
                <policy-perm-table x-data="{item: <?= htmlspecialchars($permissions); ?>}" />
            </form>
        </section>
    </div>
</div>