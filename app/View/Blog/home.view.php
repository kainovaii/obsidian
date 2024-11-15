<div>
    <js-component 
        name="global/title-banner" 
        styles="default" 
        x-data="{title: 'Blog', subtitle: ''}" 
    />
</div>
<div class="bidding "> 
    <div class="bidding__body">
        <js-component
            name="blog-list-card" 
            styles="default" 
            x-data="{item: <?= htmlspecialchars(json_encode($articles)); ?>}" 
        />
    </div>
</div>