<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'แผนที่';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-map">
    <h1><?= Html::encode($this->title) ?></h1>

<div class="well" align="center">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18489.86015534443!2d104.9121847!3d14.7265541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8fd5d1f247d7d8!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4LiX4Li44LmI4LiH4Lio4Lij4Li14Lit4Li44LiU4Lih!5e1!3m2!1sth!2sth!4v1496716618164" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
</div>
