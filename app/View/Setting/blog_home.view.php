<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">Posts</div>
        <js-component 
            name="setting/blog-list-table" 
            styles="default" 
            x-data="{item: <?= htmlspecialchars(json_encode($articles)); ?>}"
        />
    </div>
</div>