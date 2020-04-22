<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright     Copyright (c) baserCMS Users Community
 * @link          http://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       http://basercms.net/license/index.html MIT License
 */

namespace BaserCore\Controller\Admin;

use BaserCore\Controller\Admin\BcAdminAppController;
use Cake\Event\Event;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/**
 * UserGroups Controller
 *
 * @property \App\Model\Table\UserGroupsTable $UserGroups
 * @method \App\Model\Entity\UserGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserGroupsController extends BcAdminAppController
{
    public $siteConfigs = [];

    /**
     * Before Filter
     * @param EventInterface $event
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(EventInterface $event)
    {
        // TODO 取り急ぎ動作させるためのコード
        // >>>
        $this->siteConfigs['admin_list_num'] = 20;
        // $this->request = $this->request->withParam('pass', ['num' => 20]);
        // <<<

    }

    /**
     * ログインユーザーグループリスト
     *
     * 管理画面にログインすることができるユーザーグループの一覧を表示する
     *
     * - list view
     *  - UserGroup.id
     *	- UserGroup.name
     *  - UserGroup.title
     *  - UserGroup.created && UserGroup.modified
     *
     * - search input
     *	- UserGroup.name
     *
     * - pagination
     * - view num
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->request = $this->request->withParam('pass', ['num' => $this->siteConfigs['admin_list_num']]);
        $default = ['named' => ['num' => $this->siteConfigs['admin_list_num']]];
        $this->setViewConditions('UserGroup', ['default' => $default]);
        $userGroups = $this->paginate(
            $this->UserGroups->find('all')
                ->limit($this->request->getParam('pass')['num'])
        );
        $this->set([
            'userGroups' => $userGroups,
            '_serialize' => ['userGroups']
        ]);

        // TODO: help
        // $this->help = 'user_groups_index';
        $this->set('title', __d('baser', 'ユーザーグループ一覧'));
    }
}