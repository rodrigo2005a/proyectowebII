<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\EventInterface;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/5/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/5/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    /**
     * Called before each action is executed.
     *
     * @param \Cake\Event\EventInterface $event The beforeFilter event.
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $availableLocales = [
            'en_US' => 'English',
            'es_ES' => 'Español',
        ];

        $session = $this->getRequest()->getSession();
        $requestedLocale = $this->getRequest()->getQuery('lang');
        if ($requestedLocale !== null && isset($availableLocales[$requestedLocale])) {
            $session->write('App.locale', $requestedLocale);
        }

        $locale = $session->read('App.locale') ?: Configure::read('App.defaultLocale');
        I18n::setLocale($locale);
        $this->set(compact('locale', 'availableLocales'));

        $controller = $this->getRequest()->getParam('controller');
        $action = $this->getRequest()->getParam('action');

        if ($controller === 'Users' && in_array($action, ['login', 'logout'], true)) {
            return null;
        }

        if (!$session->check('Auth.User')) {
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }

        return null;
    }
}
