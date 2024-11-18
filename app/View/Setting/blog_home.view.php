<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">
            <span>Blog</span>
            <a href="/settings/blog/new" style="float: right; border-radius: 5px;" class="button-stroke button-small header__button" type="submit">Create</a>
        </div>
        <blog-list-table x-data="{item: <?= htmlspecialchars(json_encode($articles)); ?>}" />
    </div>
</div>