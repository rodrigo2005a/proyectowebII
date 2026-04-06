<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="regiones form content">
    <?= $this->Form->create($region) ?>
    <fieldset>
        <legend><?= __('Edit Region') ?></legend>
        <?php
            echo $this->Form->control('nombre', ['label' => 'Nombre']);
            echo $this->Form->control('paises', ['label' => 'Países']);
            echo $this->Form->control('superficie_km2', ['label' => 'Superficie (km²)']);
        ?>
    </fieldset>
    <?= $this->Form->submit(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
</div>
