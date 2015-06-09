<?php

use Illuminate3\Pages\Model\Section;

use Illuminate3\Content\Model\Content;

class ContentTableSeeder extends Seeder {

	public function run()
	{
            DB::table('content')->delete();
	}

}