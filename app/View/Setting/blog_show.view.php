<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">
            <span>Edit post: <?= $article->title ?></span>
        </div>
        
        <div x-data="{content: '<?= $article->content ?>'}" >
            <form action="/api/blog/edit" method="POST">
                <input type="hidden" name="title" value="<?= $article->title ?>">
                <input type="hidden" name="id" value="<?= $article->id ?>">
                <input type="hidden" name="author" value="<?= $article->author ?>">
                <text-editor />
            </form>
        </div>

    </div>
</div>

<style>
.editor {
    background: #18191D;
}

.editor_button {
    color: #ffff;
    padding: 8px;
    border: 1px solid  #23262F;
}

.editor_write_zone {
    border: 1px solid  #23262F;
    padding: 10px;
}

.editor_header {
    border: 1px solid  #23262F;
    padding: 10px;
}
</style>