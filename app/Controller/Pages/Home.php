<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page
{
    /**
     * Método responsável por retornar o conteúdo (view) da home
     * @return string
     */
    public static function getHome()
    {
        //organização
        $obOrganization = new Organization;

        //view da home
        $content =  View::render('pages/home', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        return parent::getPage('WDEV - Home', $content);
    }
}
