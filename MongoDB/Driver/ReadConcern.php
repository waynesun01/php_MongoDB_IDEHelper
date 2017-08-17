<?php
namespace MongoDB\Driver;

/**
 * 控制复制集和副本集分片的读取操作的隔离级别。 此选项需要WiredTiger存储引擎和MongoDB 3.2或更高版本。
 * @encoding UTF-8 
 * @author WayneSun
 * @datetime 2017-8-14 14:56:00
 * @since mongodb >=1.1.0
 */
class ReadConcern{
	/* Constants */
	const LINEARIZABLE = "linearizable";
	const LOCAL = "local";
	const MAJORITY = "majority";

	/* 方法 */
	public function bsonSerialize(){
		
	}

	/**
	 * 
	 * @param string $level
	 */
	public function __construct(string $level = ''){
		
	}

	public function getLevel(){
		
	}

}