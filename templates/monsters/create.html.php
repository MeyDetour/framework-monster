<form class="form" action="?type=monsters&action=create" method="post">
    <div class="title">Welcome,<br><span>sign up to continue</span></div>
    <input type="text" name="name" placeholder="Name.." class="input">
    <input type="number" name="price" class="input">
    <input type="text" name="description" placeholder="Description.." class="input">
    <div class="title"><br><span>Choose Categories</span></div>
    <select name="category" class="d-flex flex-column input">
        <?php foreach ($categories as $category) :
            if (!is_null($category->getCategory())) { ?>
                <option value="<?= $category->getCategory() ?>" class="input"><?= $category->getCategory() ?></option>
            <?php } endforeach; ?>
    </select>
    <select name="category2" class="d-flex flex-column input">
        <option value="NULL" class="input">Null</option>
        <?php foreach ($categories as $category) :
            if (!is_null($category->getCategory())) { ?>
                <option value="<?= $category->getCategory() ?>" class="input"><?= $category->getCategory() ?></option>
            <?php } endforeach; ?>
    </select>
    <button type="submit" class="button-confirm">Envoyer →</button>
</form>