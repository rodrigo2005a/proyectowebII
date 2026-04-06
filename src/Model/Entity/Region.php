<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $paises
 * @property string|null $superficie_km2
 */
class Region extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when those fields are disabled (in the entity) they are not
     * directly assignable and have to be set using setter methods instead.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nombre' => true,
        'paises' => true,
        'superficie_km2' => true,
    ];
}
