<div>
    <title-banner x-data="{title: 'Blog', subtitle: ''}" />
</div>

<div class="bidding"> 
    <div class="bidding__body">
        <blog-list-card x-data="{item: <?= htmlspecialchars(json_encode($articles)); ?>}" />
    </div>
</div>