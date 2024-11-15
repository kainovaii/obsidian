<div class="section article" x-data="{article: <?= htmlspecialchars(json_encode($article)); ?>}">
    <div class="section article__body">
        <div class="article__center center">
            <div class="article__head">
                <h1 class="article__title h1" x-text="article.title"></h1>
                <div class="breadcrumbs">
                    <div class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Home</a></div>
                    <div class="breadcrumbs__item"><a class="breadcrumbs__link" href="/blog">Blog</a></div>
                    <div class="breadcrumbs__item" x-text="article.title"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="article__wrap">
        <div class="article__center center">
            <div class="content">
               <figure><img :src="article.thumbnail" alt="Content"></figure>
               <br>
               <p x-text="article.content"></p>
            </div>
            <div class="actions js-actions">
                <div class="actions__list">

                    <div class="actions__item">
                        <button class="button-circle-stroke button-small actions__favorite js-actions-favorite">
                      <svg class="icon icon-heart">
                        <use xlink:href="#icon-heart"></use>
                      </svg>
                      <svg class="icon icon-heart-fill">
                        <use xlink:href="#icon-heart-fill"></use>
                      </svg>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>