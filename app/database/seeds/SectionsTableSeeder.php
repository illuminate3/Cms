<?php

use Illuminate3\Pages\Model\Section;

class SectionsTableSeeder extends Seeder {

    const CONTENT   = 1;
    const SIDEBAR   = 2;
    const TOOLS     = 3;
    const NAVBAR    = 4;
    const JUMBOTRON = 5;
    const TOP       = 6;
    const FAVORITES = 7;

	public function run()
	{
		DB::table('sections')->delete();

		Section::create(array(
			'id' => self::CONTENT,
			'title' => 'Content',
			'name' => 'content',
			'mode' => Section::MODE_PUBLIC,
		));

		Section::create(array(
			'id' => self::SIDEBAR,
			'title' => 'Sidebar',
			'name' => 'sidebar',
			'mode' => Section::MODE_PUBLIC,
		));

		Section::create(array(
			'id' => self::TOOLS,
			'title' => 'Tools',
			'name' => 'tools',
			'mode' => Section::MODE_PROTECTED,
		));

		Section::create(array(
			'id' => self::NAVBAR,
			'title' => 'Navigation bar',
			'name' => 'navbar',
			'mode' => Section::MODE_PROTECTED,
		));
        
		Section::create(array(
			'id' => self::JUMBOTRON,
			'title' => 'Jumbotron',
			'name' => 'jumbotron',
			'mode' => Section::MODE_PROTECTED,
		));

		Section::create(array(
			'id' => self::TOP,
			'title' => 'Top',
			'name' => 'top',
			'mode' => Section::MODE_PROTECTED,
		));

		Section::create(array(
			'id' => self::FAVORITES,
			'title' => 'Favorites',
			'name' => 'favorites',
			'mode' => Section::MODE_PROTECTED,
		));
	}

}