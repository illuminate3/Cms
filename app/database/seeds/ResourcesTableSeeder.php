<?php

use Illuminate3\Admin\Model\ResourceRepository;

class ResourcesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('resources')->delete();

		ResourceRepository::createWithPages(array(
			'title' => 'Resource',
            'description' => 'Here you can have all your resources that will contain data you can use in your application',
			'controller' => 'Illuminate3\Admin\Controller\ResourceController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Page',
            'description' => 'This is a list of all pages that are used in your application. You can add as many pages as you like.',
			'controller' => 'Illuminate3\Pages\Controller\PageController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Layout',
            'description' => 'Pages can have several layouts to choose from, depending on how the data is grouped and presented to the user',
			'controller' => 'Illuminate3\Pages\Controller\LayoutController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Block',
            'description' => 'These are containers of data that are put in layout sections on a page.',
			'controller' => 'Illuminate3\Content\Controller\BlockController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Content',
            'description' => 'A combination of a block on a certain page in one section.',
			'controller' => 'Illuminate3\Content\Controller\ContentController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Users',
            'description' => 'Manage users on the website',
			'controller' => 'Illuminate3\User\Controller\UserController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'User groups',
            'description' => 'Manage user groups on the website',
			'controller' => 'Illuminate3\User\Controller\GroupController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Files',
            'description' => 'Manage file uploads',
			'controller' => 'Illuminate3\Uploads\Controller\FileController',
		));

	}

}