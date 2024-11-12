<div class="content">
    <div class="bg-dark text-secondary px-4 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Blog</h1>
        </div>
    </div>
    <div class="container mt-3">
        <a class="btn btn-primary" href="/blog/create">Create</a>
    </div>
    <div class="container mt-3">
        <div class="row">
            <js-component
                name="blog-list-card" 
                styles="default" 
                x-data="{item: <?= htmlspecialchars(json_encode($articles)); ?>}" 
            />
        </div>
    </div>
</div>