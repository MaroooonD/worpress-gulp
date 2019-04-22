# グローバルナビゲーションについて
ナビゲーションに関しては`<?php wp_nav_menu(); ?>`で表示できるが、その際のコードやclass名は自動生成されている

```
<div class="menu">
    <ul>
        <li class="page_item page-item-2">
            <a href="http://theme.local/sample-page/">Sample Page</a>
        </li>
        <li class="page_item page-item-5 page_item_has_children">
            <a href="/">新規固定ページ</a>
            <ul class='children'>
                <li class="page_item page-item-7"><a href="/">サブコンテンツ</a></li>
            </ul>
        </li>
    </ul>
</div>
```

```
.menu > ul {
    overflow: hidden;
    width: 100%;
    margin: 0 auto;
    padding: 0;
    display: flex;
}

.page_item_has_children, .page_item_has_children > a {
    list-style: none;
    width: 20%;
}

.page_item_has_children > a, .children > a {
        display: block;
        width: 100%;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: #fff;
        font-size: 1.4rem;
        background: #000;
        text-decoration: none;
        border-right: 1px solid #eee;
        box-sizing: border-box;
        &:hover {
            border-color: #000;
            background: #dcdcdc;
            color: #000;
        }
}

.children > a {
    margin-left: 40px;
}

.page_item_has_children {
    transition: .2s;
    &:hover {
        border-color: #000;
        background: #FFF;
        color: #000;
    }
}

.children {
    display: none;
    margin-left: -40px;
    position: absolute;
    width: 100%;
}

.children > a {
    border-top: 1px solid #eee;
}

```
