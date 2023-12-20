<?php

use yii\helpers\Html;
?>
<p>Ви вказали наступну інформацію:</p>

<ul>
    <li><label>Ім’я</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Адреса електронної пошти</label>: <?= Html::encode($model->email) ?></li>
</ul>