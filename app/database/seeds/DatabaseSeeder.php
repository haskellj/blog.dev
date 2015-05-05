<?php


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	// Fill db with users
	public function run()
	{
		DB::table('users')->delete();

		$user1 = new User;
		$user1->username = 'guest';
		$user1->email = 'guest@gmail.com';
		$user1->password = $_ENV['USER_PASS'];
		$user1->save();

		$user2 = new User;
		$user2->username = 'test';
		$user2->email = 'test@gmail.com';
		$user2->password = $_ENV['USER_PASS'];
		$user2->save();

		$user3 = new User;
		$user3->username = 'jamie';
		$user3->email = 'jamie@gmail.com';
		$user3->password = $_ENV['USER_PASS'];
		$user3->save();

	}
}

class PostsTableSeeder extends Seeder {

	// Fill db with users
	public function run()
	{
		DB::table('posts')->delete();
		$users = User::all();

		// Start each user off with at least 1 post
		foreach ($users as $user) {
			$post = new Post;
			$post->title = "Title " . $user->user_id;
			$post->body = "Body " . $user->user_id;
			$post->slug = $post->title;
			$post->user_id = $user->user_id;
			$post->save();
		}
		// Randomly assign 7 more posts to users
		for($i = 4; $i <= 10; $i++) {
			$post = new Post;
			$post->title = "Title $i";
			$post->body = "Body $i";
			$post->slug = $post->title;
			$post->user_id = rand(1, 3);
			$post->save();
		}
	}
}
