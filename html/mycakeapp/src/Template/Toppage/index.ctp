<?php
    // 割引を追加したときに表示されるように配列の後ろから(新しい順に)バナーを4つ選択
    for ($i = 4; $i >= 1; $i--) {
        $discountsBanner[$i] = array_pop($banners);
    }

?>
<div class="main">
    <h1 class="slideshow">
        <img src="../../../webroot/img/slideshow/1.png" alt="" />
    </h1>

    <h2>上映映画一覧</h2>
    <ul class="screening-images">
        <li><img src="../../../webroot/img/screening/2.png" alt="" /></li>
        <li><img src="../../../webroot/img/screening/3.png" alt="" /></li>
        <li><img src="../../../webroot/img/screening/4.png" alt="" /></li>
    </ul>
    <button class="btn-sea-details">詳しく見る</button>

    <h2>お得な割引</h2>
    <ul class="discount-banners">
        <li><?php echo $this->Html->image('banner/' . $discountsBanner[1]); ?></li>
        <li><?php echo $this->Html->image('banner/' . $discountsBanner[2]); ?></li>
        <li><?php echo $this->Html->image('banner/' . $discountsBanner[3]); ?></li>
        <li><?php echo $this->Html->image('banner/' . $discountsBanner[4]); ?></li>
    </ul>
    <button class="btn-sea-details">詳しく見る</button>
</div>
