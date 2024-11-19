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
            <text-editor x-data="content" />
            </form>
        </div>

    </div>
</div>