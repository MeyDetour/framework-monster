<div class="d-flex flex-row flex-wrap">
    <?php foreach ($monsters as $monster) : ?>

        <div class="card" style="">
            <img src="imageMonster/<?=$monster->getImage()?>" class="card-img-top indexImage" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$monster->getName()?></h5>
                <p class="card-text"><?=$monster->getPrice()?>€</p>

                <a href="?type=monsters&action=delete&id=<?=$monster->getId()?>"><i class="bi bi-trash-fill"></i></a>
                <a href="?type=monsters&action=show&id=<?=$monster->getId()?>" class="btn btn-primary">Voir</a>
            </div>
        </div>


    <?php endforeach; ?>
</div>