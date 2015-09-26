<h2><?php echo $title; ?></h2>

<?php foreach ($produtos as $produto): ?>


        <div class="main">
                <?php echo $produto->nome; ?>
        </div>


<?php endforeach; ?>