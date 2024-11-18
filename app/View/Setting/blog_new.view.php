<div class="bidding__item">
    <div class="crypto">
        <div class="crypto__title">New post</div>
        <div x-data="{content: ''}" >
            <form action="/api/blog/create" method="POST">
            <div class="field field_view form-group">
                <div class="field__label">title</div>
                <div class="field__wrap">
                    <input class="field__input" type="text" name="title" placeholder="Title" required="">
                </div>
            </div>
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
                <input type="hidden" name="content" :value="content">
                <button style="margin-top: 10px; float: right; border-radius: 5px;" class="button-stroke button-small header__button" type="submit">Submit</button>
            </alpine-editor>
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

.form-group {
    margin-bottom: 10px;
}
</style>