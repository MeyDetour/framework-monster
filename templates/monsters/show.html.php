
<div class="d-flex flex-row">
    <div>
        <h5 class="card-title"><?=$monster->getName()?></h5>
        <p class="card-text"><?=$monster->getDescription()?></p>
        <p class="card-text"><?=$monster->getPrice()?></p>
        <p class="card-text"><?=$monster->getCategory()?></p>

        <?php if(!is_null($monster->getCategory2())){?>
            <p class="card-text"><?=$monster->getCategory2()?></p>
            <?php }  ?>
        <a href="?type=monsters&action=index" class="btn btn-primary">Retour</a>
    </div>
    <img src="imageMonster/<?=$monster->getImage()?>" class="card-img-top showimage" alt="...">
</div>

