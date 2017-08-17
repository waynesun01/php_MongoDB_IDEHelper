<?php
namespace MongoDB\Driver;

/**
 * Description of WriteConcern
 * @encoding UTF-8 
 * @author WayneSun
 * @datetime 2017-8-14 14:45:52
 */
class WriteConcern{
	const MAJORITY = "majority";

	/* 方法 */
	public function bsonSerialize(){
		
	}

	/**
	 * 
	 * @param  string|integer $w
	 * @param integer $wtimeout
	 * @param boolean  $journal
	 */
	public function __construct($w, $wtimeout = 0, $journal = false){
		
	}

	public function getJournal(){
		
	}

	public function getW(){
		
	}

	public function getWtimeout(){
		
	}

}