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

		$faker = Factory::create();

		for($i = 0; $i < 100; $i++) {
			$user = User::create(array(
				'username' => $faker->userName,
				'email' => $faker->email,
				'password' => $faker->password 
			));
		}
		// $user1 = new User;
		// $user1->username = 'guest';
		// $user1->email = 'guest@gmail.com';
		// $user1->password = $_ENV['USER_PASS'];
		// $user1->save();

		// $user2 = new User;
		// $user2->username = 'test';
		// $user2->email = 'test@gmail.com';
		// $user2->password = $_ENV['USER_PASS'];
		// $user2->save();

		// $user3 = new User;
		// $user3->username = 'jamie';
		// $user3->email = 'jamie@gmail.com';
		// $user3->password = $_ENV['USER_PASS'];
		// $user3->save();

	}
}

class PostsTableSeeder extends Seeder {

	// Fill db with users
	public function run()
	{
		DB::table('posts')->delete();
		$users = User::all();

		$faker = Factory::create();

		for($i = 0; $i < 100; $i++) {
			$words = rand(3, 8);
			$moreWords = rand(10, 50);
			$title = $faker->sentence($words);
			$body = $faker->sentence($moreWords);
			$user_id = rand(1, 100);

			$post = Post::create(array(
				'title' => $title,
				'body' => $body,
				'slug' => $title,
				'user_id' => $user_id
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
