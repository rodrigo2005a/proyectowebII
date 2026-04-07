<?php
/**
 * @var \App\View\AppView $this
 */
$locale = $this->get('locale') ?? 'en_US';
?>
<div class="users login content">
    <div class="language-switcher" style="margin-bottom: 1rem;">
        
    </div>

    <h3><?= $locale === 'es_ES' ? 'Iniciar sesión' : 'Login' ?></h3>
    <?= $this->Form->create(null) ?>
    <fieldset>
        <legend><?= $locale === 'es_ES' ? 'Ingrese sus credenciales' : 'Enter your credentials' ?></legend>
        <?= $this->Form->control('correo', ['label' => $locale === 'es_ES' ? 'Correo' : 'Email', 'required' => true]) ?>
        <?= $this->Form->control('password', ['label' => $locale === 'es_ES' ? 'Contraseña' : 'Password', 'type' => 'password', 'required' => true]) ?>
    </fieldset>
    <?= $this->Form->button($locale === 'es_ES' ? 'Entrar' : 'Submit') ?>
    <?= $this->Form->end() ?>
</div>
