<?// debug($gps['name']);?>

<h1><?= $post->caption?></h1>
<ul class="gps">

    <li><?= $gps->countries[0]['name'];?></li>
    <li><?= $gps->regions[0]['name'];?></li>
    <li><?= $gps['name'];?></li>
</ul>
<div class="text-center">
    <h2><?= $post->caption;?></h2>
</div>
<p><?= $post->description?></p>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <?= $post->map?>
    </div>
</div>

