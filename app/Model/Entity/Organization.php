<?php

namespace App\Model\Entity;

class Organization
{
    /**
     * ID da organização
     * @var integer
     */

    public $id = 1;

    /**
     * Nome da organização
     * @var string
     */
    public $name = 'WDEV';

    /**
     * Site da organoidação
     * @var string
     */
    public $site = 'https://www.youtube.com/channel/UCjX5v2U4jLZjI0d8KB6eEeQ';

    /**
     * Descrição da organização
     * @var string
     */
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis cursus ultricies.';
}
