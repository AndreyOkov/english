<?php foreach ($words as $word) { ?>

    <p><?= $word['enword'] ?></p>
<?php } ?>
<?= \yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?>
