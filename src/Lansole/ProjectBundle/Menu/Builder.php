<?php

namespace Lansole\ProjectBundle\Menu;

use Knp\Menu\FactoryInterface,
    Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());
        $menu->setAttributes(array('class' => 'nav'));

        $menu->addChild('Overview', array('route' => 'LansoleProjectBundle_homepage'));
//        $menu->addChild('About', array('uri' => $this->container->get('router')->generate('LansoleProjectBundle_homepage') . '#about'));
        $menu->addChild('Blog', array('route' => 'LansoleBlogBundle_homepage'));

        return $menu;
    }

    public function authenticationMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());
        $menu->setAttributes(array('class' => 'nav secondary-nav'));

        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));
        } else {
            $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        }

        return $menu;
    }
}