<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    public function run()
    {
        $mark = User::where('email', 'like', 'mwwardle@gmail.com')->firstOrFail();
        $dan = User::where('email', 'like', 'mystik3eb@gmail.com')->firstOrFail();

        $planets = Category::create(array(
            'name' => 'Planets',
            Category::MODIFIED_BY => $dan->id,
            Category::CREATED_BY => $dan->id,
        ));

        $characters = Category::create(array(
            'name' => 'Characters',
            Category::MODIFIED_BY => $dan->id,
            Category::CREATED_BY => $mark->id
        ));

        $interverse = Category::create(array(
            'name' => 'The Interverse',
            Category::MODIFIED_BY => $mark->id,
            Category::CREATED_BY => $dan->id
        ));

        $technology = Category::create(array(
            'name' => 'Technology',
            Category::MODIFIED_BY => $mark->id,
            Category::CREATED_BY => $mark->id,
        ));

        $earth = Page::create(array(
            'category_id' => $planets->id,
            'title' => 'Earth',
            'slug' => 'earth',
            'content' => 'Earth is the third planet from the sun.  It is where dolphins and ravens live.',
            'mod_by_id' => $mark->id,
            'created_by_id' => $mark->id,
        ));

        $telepathy = Page::create(array(
            'category_id' => $interverse->id,
            'title' => 'Telepathy',
            'slug' => 'telepathy',
            'content' => 'Beings in the Universe are able to communicate telepathically through the Interverse',
            'mod_by_id' => $mark->id,
            'created_by_id' => $mark->id,
        ));

        $traitor = Page::create(array(
            'category_id' => $characters->id,
            'title' => 'The Traitor',
            'slug' => 'the-traitor',
            'content' => 'This guy betrayed the Brotherhood of Light and started his own society.',
            'mod_by_id' => $mark->id,
            'created_by_id' => $mark->id,
        ));

        $ashtar = Page::create(array(
            'category_id' => $characters->id,
            'title' => 'Ashtar',
            'slug' => 'ashtar',
            'content' => 'This guy is a member of the brotherhood of light.',
            'mod_by_id' => $mark->id,
            'created_by_id' => $mark->id,
        ));

        $comment1 = Comment::create(array(
            'page_id' => $telepathy->id,
            'user_id' => $dan->id,
            'content' => 'So, how does this work?',
            'parent_comment_id' => null,
        ));

        $comment2 = Comment::create(array(
            'page_id' => $telepathy->id,
            'user_id' => $mark->id,
            'content' => 'You know what, I haven\'t figured that out yet.',
            'parent_comment_id' => $comment1->id,
        ));

        $comment3 = Comment::create(array(
            'page_id' => $telepathy->id,
            'user_id' => $mark->id,
            'content' => 'I think this is going to be great.',
        ));

        $this->command->info('Test Data seeded.');
    }
}