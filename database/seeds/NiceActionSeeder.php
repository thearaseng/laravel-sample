<?php

use App\Category;
use App\NiceAction;
use Illuminate\Database\Seeder;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category();
        $category1->name = 'Cate 1';
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Cate 2';
        $category2->save();

        $nice_action = new NiceAction();
        $nice_action->name = 'Greet';
        $nice_action->niceness = 4;
        $nice_action->save();

        $category1->nice_actions()->attach($nice_action);
        $category2->nice_actions()->attach($nice_action);

        $nice_action = new NiceAction();
        $nice_action->name = 'Kiss';
        $nice_action->niceness = 6;
        $nice_action->save();

        $category1->nice_actions()->attach($nice_action);

        $nice_action = new NiceAction();
        $nice_action->name = 'Hug';
        $nice_action->niceness = 8;
        $nice_action->save();

        $category2->nice_actions()->attach($nice_action);
        $category2->save();
        $category1->save();
    }
}
