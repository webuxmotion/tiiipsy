<?=$this->component('hero')?>

<?php foreach ($tips as $tip): ?>
    <img src="<?=$tip['image']?>" style="width: 150px; margin: 50px;" />
<?php endforeach; ?>