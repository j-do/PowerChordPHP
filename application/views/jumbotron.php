<div class="jumbotron">
    <div class="container">
        <div class="pull-left">
            <img src="<?= $this->vars['jumbotron']['imageUrl']; ?>" alt="jdoLogoNoText" width="150px"/>
        </div>
        <h1 class="page-header"><?= $this->vars['jumbotron']['heading']; ?></h1>
        <h3 class="blockquote-reverse"><?= $this->vars['jumbotron']['tagline']; ?></h3>
        <a class="btn btn-primary pull-right" href="<?= $this->vars['jumbotron']['downloadLink']; ?>">
            <p>Download Now!</p><span class="glyphicon glyphicon-download"></span>
        </a>
    </div>
</div>