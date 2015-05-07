<?php

use Faker\Factory;	//see github documentation for fzaninotto/Faker

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// delete pre-existing versions of tables in the opposite order they 
		// were seeded in to avoid foreign key conflict errors
		DB::table('posts')->delete();
		DB::table('users')->delete();

		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	// Fill db with fake users for testing purposes
	public function run()
	{
		$faker = Factory::create();

		for($i = 0; $i < 100; $i++) {
			$user = User::create(array(
				'username' => $faker->userName,
				'email' => $faker->email,
				'password' => $faker->password 
			));
		}

		// a user with known password for testing purposes
		$user1 = new User;
		$user1->username = 'guest';
		$user1->email = 'guest@gmail.com';
		$user1->password = $_ENV['USER_PASS'];
		$user1->save();

	}
}

class PostsTableSeeder extends Seeder {

	// Fill db with users
	public function run()
	{
		$faker = Factory::create();

		for($i = 0; $i < 101; $i++) {
			$words = rand(3, 8);
			$title = $faker->sentence($words);
			$body = $faker->realText();
			// $user_id = rand(1, 100);
			$user = User::all()->random();

			$post = Post::create(array(
				'title' => $title,
				'body' => $body,
				'slug' => $title,
				'user_id' => $user->user_id
			));
		}

		// // Start each user off with at least 1 post
		// foreach ($users as $user) {
		// 	$post = new Post;
		// 	$post->title = "Title " . $user->user_id;
		// 	$post->body = "Body " . $user->user_id;
		// 	$post->slug = $post->title;
		// 	$post->user_id = $user->user_id;
		// 	$post->save();
		// }

		// // Randomly assign 7 more posts to users
		// for($i = 4; $i <= 10; $i++) {
		// 	$post = new Post;
		// 	$post->title = "Title $i";
		// 	$post->body = "Body $i";
		// 	$post->slug = $post->title;
		// 	$post->user_id = rand(1, 3);
		// 	$post->save();
		// }
	}
}
