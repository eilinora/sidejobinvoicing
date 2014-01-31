<?php

class MongoTest extends Moloquent implements UserInterface, RemindableInterface {

	public function all () {

		// With custom connection
		$user = DB::connection('mongodb')->collection('users')->get();


	}

}


?>