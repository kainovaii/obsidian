<form action="/api/policies/edit" method="POST">
    <input type="hidden" name="policy_name" value="<?= $policy->name ?>">
    <policy-perm-table x-data="{item: <?= htmlspecialchars($permissions); ?>}" />
</form>