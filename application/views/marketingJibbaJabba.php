<div class="container">
    <?php foreach(AppGate::getMarketingJibbaJabba() as $mjj):?>
    <div class="col-lg-4">
        <h2><?=$mjj['heading'];?></h2>
        <p><?=$mjj['content'];?></p>
    </div>
    <?php endforeach;?>
</div>