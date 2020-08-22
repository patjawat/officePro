
<?= yii\authclient\widgets\AuthChoice::widget([
     'baseAuthUrl' => ['site/auth']
]) ?>
<?php $authAuthChoice = AuthChoice::begin([
'baseAuthUrl' => ['site/auth']
]); ?>

<?php foreach ($authAuthChoice->getClients() as $client): ?>
    <?php $authAuthChoice->clientLink($client, 'Login with Facebook', ['class' => 'btn btn-primary']) ?>
<?php endforeach; ?>

<?php AuthChoice::end(); ?>