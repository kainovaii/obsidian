<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">Edit post: <?= $article->title ?></div>
        <div x-data="{content: '<?= $article->content ?>'}" >
            <alpine-editor x-model="content">
                <div data-type="menu" class="editor_header">
                    <button type="button" data-command="strong" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-bold"></i>
                    </button>
                    <button type="button" data-command="paragraph" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-paragraph"></i>
                    </button>
                    <button type="button" data-command="heading" data-level="1" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-h1"></i>
                    </button>
                    <button type="button" data-command="heading" data-level="2" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-h2"></i>
                    </button>
                    <button type="button" data-command="heading" data-level="3" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-h3"></i>
                    </button>
                    <button type="button" data-command="heading" data-level="4" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-h4"></i>
                    </button>
                    <button type="button" data-command="ordered_list" data-active-class="bg-blue-400" class="editor_button">
                        <i class="fa-solid fa-list"></i>
                    </button>
                </div>
                <div data-type="editor" class="editor_write_zone"></div>
                <form action="/api/blog/edit" method="POST">
                    <input type="hidden" name="author" value="<?= $article->author ?>">
                    <input type="hidden" name="title" value="<?= $article->title ?>">
                    <input type="hidden" name="id" value="<?= $article->id ?>">
                    <input type="hidden" name="content" :value="content">
                    <button style="margin-top: 10px; float: right; border-radius: 5px;" class="button-stroke button-small header__button" type="submit">Submit</button>
                </form>
            </alpine-editor>
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