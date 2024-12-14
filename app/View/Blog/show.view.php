<div class="container mx-auto px-[200px] pt-20">
    <div class="article__wrap">
        <div class="article__title grid grid-cols-1 gap-4 justify-items-center">
            <h1 class="text-center text-5xl mx-auto px-[300px]"><?= $article->title ?></h1>
            <div class="breadcrumbs text-sm">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><?= $article->title ?></li>
                </ul>
            </div>
            <div>
                <ul class="flex gap-2">
                    <li><div class="badge badge-outline">Tag</div></li>
                    <li><div class="badge badge-outline">Tag</div></li>
                </ul>
            </div>
        </div>
        <div class="article__thumbnail grid grid-cols-1 justify-items-center mt-10">
            <img src="<?= $article->thumbnail ?>" class="rounded-lg shadow-2xl w-[70%]" />
        </div>
        <div class="article__content mx-auto px-[190px] mt-5">
            <div x-data="{content: '<?= $content ?>'}" x-html="content"></div>
        </div>
    </div>
</div>

<style>
h1 {
    font-size: 32px;
    font-weight: 700;
}

h2 {
    font-size: 24px;
    font-weight: 700;
}

h2 {
    font-size: 19px;
    font-weight: 700;
}

h2 {
    font-size: 16px;
    font-weight: 700;
}
</style>