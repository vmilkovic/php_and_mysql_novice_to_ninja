<?php

namespace Ijdb\Entity;

class Joke {

	public $id;
	public $authorId;
	public $jokedate;
	public $joketext;
	private $authorsTable;
	private $author;
	private $jokeCategoriesTable;

	public function __construct( \Ninja\DatabaseTable $authorsTable, \Ninja\DatabaseTable $jokeCategoriesTable ){

		$this->authorsTable 	   = $authorsTable;
		$this->jokeCategoriesTable = $jokeCategoriesTable;

	}

	public function getAuthor(){

		if( empty( $this->author ) ){

			$this->author = $this->authorsTable->findById( $this->authorId );

		}

		return $this->author;

	}

	public function addCategory( $categoryID ){

		$jokeCat = ['jokeId' => $this->id, 'categoryId' => $categoryID ];

		$this->jokeCategoriesTable->save( $jokeCat );

	}
}