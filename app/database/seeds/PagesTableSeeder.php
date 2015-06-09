<?php

use Illuminate3\Pages\Model\PageRepository;
use Illuminate3\Content\Model\Content;

class PagesTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('pages')->delete();
		DB::table('navigation_nodes')->delete();

		// Basic pages
		$home           = PageRepository::createWithContent('Home', '/', '', 'layouts.default', 'get', 'home');
		$admin          = PageRepository::createWithContent('Admin', 'admin', 'Illuminate3\Admin\Controller\NavigationController@dashboard', 'layouts.admin', 'get', 'admin.index');
		$login          = PageRepository::createWithContent('Login', 'login', 'Illuminate3\User\Controller\AuthController@login', 'layouts.admin', 'get', 'user.login');
		$login          = PageRepository::createWithContent('Logout', 'logout', 'Illuminate3\User\Controller\AuthController@logout', 'layouts.admin', 'get', 'user.logout');
		$permissions    = PageRepository::createWithContent('Permissions', 'admin/permissions', 'Illuminate3\User\Controller\PermissionController@index', 'layouts.admin', 'get', 'user.permissions');

		// Add the resource pages
		PageRepository::createResourcePages('Dashboard App', 'Illuminate3\Admin\Controller\DashboardController', null, 'layouts.admin');
    
		// These routes handle the content configuration form
		PageRepository::createWithContent('Content create form', 'admin/content/config-create', 'Illuminate3\Content\Controller\ConfigController@create', null, 'get', 'admin.content.config.create');
		PageRepository::createWithContent('Content store form', 'admin/content/config-store', 'Illuminate3\Content\Controller\ConfigController@store', null, 'post', 'admin.content.config.store');
		PageRepository::createWithContent('Content edit form', 'admin/content/config-edit/{content}', 'Illuminate3\Content\Controller\ConfigController@edit', null, 'get', 'admin.content.config.edit');
		PageRepository::createWithContent('Content config update', 'admin/content/config-update/{content}', 'Illuminate3\Content\Controller\ConfigController@update', null, 'put', 'admin.content.config.update');
		PageRepository::createWithContent('Switch content mode', 'admin/content/switch', 'Illuminate3\Content\Controller\SwitchController@contentMode', null, 'get', 'admin.content.switch');


                // Left navigation bar
		Content::create(array(
			'controller'    => 'Illuminate3\Navigation\Controller\MenuController@container',
			'params' 	=> array('container' => 'left', 'class' => 'list-unstyled pull-left'),
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::NAVBAR
		));
                
                // Right navigation bar
		Content::create(array(
			'controller'    => 'Illuminate3\Navigation\Controller\MenuController@container',
			'params' 	=> array('container' => 'right', 'class' => 'list-unstyled pull-right'),
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::NAVBAR
		));

		Content::create(array(
			'block_id'      => BlocksTableSeeder::ID_TEXT,
			'page_id'       => $admin->id,
			'section_id'    => SectionsTableSeeder::JUMBOTRON,
			'params'        => array(
				'text' => 'Jumbo!!!'
			)
		));
        
		Content::create(array(
			'block_id'      => BlocksTableSeeder::ID_TEXT,
			'page_id'       => $home->id,
			'section_id'    => SectionsTableSeeder::CONTENT,
			'params'        => array(
				'text' => 'Welcome!!!'
			)
		));

		Content::create(array(
			'controller'    => 'Illuminate3\User\Controller\AuthController@status',
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::TOP,
		));

		Content::create(array(
			'controller'    => 'Illuminate3\Admin\Controller\NavigationController@favorites',
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::FAVORITES,
		));

	}

}