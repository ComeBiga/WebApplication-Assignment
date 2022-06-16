<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css?ver=3">
    <title>Document</title>
</head>

<body>
    <?php include("procommu_header.php"); ?>

    <div class="main-contents">
        <div class="main-image">
            <img src="https://opgg-static.akamaized.net/logo/20220530145104.542d6f09e949408bb0a31dba821d3287.png?image=q_auto,f_webp,w_auto&amp;v=1654094991090"
                alt="OP.GG logo (일라오이)" title="일라오이">
        </div>

        <div class="search-container">
            <div>
                <form class="search-container-form">
                    <div>
                        <button class="region" type="button"><small>Region</small><span>Korea</span></button>
                    </div>
                    <div>
                        <label for="searchSummoner">Search</label>
                        <input type="text" id="searchSummoner" autocomplete="off" name="search" value="" placeholder=""
                            class="css-9yyaie ee3th7h7 js-bound">
                    </div>
                    <button type="submit">
                        <img src="https://s-lol-web.op.gg/images/icon/icon-gg.svg?v=1654094991090" width="42"
                            alt="search" height="auto">
                    </button>
                </form>
            </div>
        </div>

        <section class="recent-articles">
            <h2><a target="_blank" rel="noopener noreferrer" href="https://talk.op.gg/s/lol/all?sort=popular">최신글</a></h2>
            <div class="community-list">
                <article class="recent-article-item">
                    <a href="https://talk.op.gg/s/lol/humor/5238329/%EC%98%A4%EC%A7%95%EC%96%B4%EA%B2%8C%EC%9E%84-%EC%8B%9C%EC%A6%8C2-jpg">
                        <div class="recent-article-item-number">1</div>
                        <div class="thumbnail"><img
                                src="https://opgg-com-image.akamaized.net/attach/images/20220613015456.2146487.jpg"
                                alt=""></div>
                        <div class="text">
                            <div class="title-container"><span class="title">오징어게임 시즌2.jpg</span><span
                                    class="comment-count">[16]</span></div>
                            <ul class="meta-list">
                                <li>
                                    <div class="tooltip" style="position: relative;">5시간 전</div>
                                </li>
                                <li>쏘나타HEV</li>
                            </ul>
                        </div>
                    </a>
                </article>
            </div>
        </section>
    </div>
</body>

</html>