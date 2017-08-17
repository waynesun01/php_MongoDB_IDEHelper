<?php
namespace MongoDB\Driver;

/**
 * Description of ReadPreference
 * @encoding UTF-8 
 * @author WayneSun
 * @datetime 2017-8-14 14:50:01
 */
class ReadPreference{
	const RP_PRIMARY = 1;
	const RP_PRIMARY_PREFERRED = 5;
	const RP_SECONDARY = 2;
	const RP_SECONDARY_PREFERRED = 6;
	const RP_NEAREST = 10;
	const NO_MAX_STALENESS = -1;
	const SMALLEST_MAX_STALENESS_SECONDS = 90;

	/* 方法 */
	public function bsonSerialize(){
		
	}

	/**
	 * 
	 * @param string|integer $mode
	 * @param array $tagSets
	 * @param array $options
	 */
	public function __construct($mode, array $tagSets = NULL, array $options = []){
		
	}

	public function getMaxStalenessSeconds(){
		
	}

	public function getMode(){
		
	}

	public function getTagSets(){
		
	}

}