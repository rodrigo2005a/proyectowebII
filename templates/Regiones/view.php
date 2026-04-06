<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="regiones view content">
    <h3><?= h($region->nombre) ?></h3>
    <table>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($region->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($region->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Países') ?></th>
            <td><?= h($region->paises) ?></td>
        </tr>
        <tr>
            <th><?= __('Superficie (km²)') ?></th>
            <td><?= $region->superficie_km2 !== null ? h($region->superficie_km2) : '' ?></td>
        </tr>
    </table>
    <div class="actions">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $region->id], ['class' => 'button']) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure?'), 'class' => 'button']) ?>
        <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
    </div>
</div>
