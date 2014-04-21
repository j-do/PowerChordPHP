<div class="container">
    <?php foreach($this->vars['marketingJibbaJabba'] as $tpm):?>
    <div class="col-lg-4">
        <h2><?=$tpm['heading'];?></h2>
        <p><?=$tpm['content'];?></p>
    </div>
    <?php endforeach;?>
</div>