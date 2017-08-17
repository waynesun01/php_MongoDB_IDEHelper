<?php
namespace MongoDB\Driver;

/**
 * Description of Manager
 * @encoding UTF-8
 * @author WayneSun
 * @datetime 2017-8-14 11:54:44
 * @see http://php.net/manual/zh/class.mongodb-driver-manager.php
 */
class Manager{
	/* 方法 */
	/**
	 * Create new MongoDB Manager
	 * @param string $uri A mongodb:// connection URI: mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][?options]]
	 * @param array $uriOptions 其他连接字符串选项，它将覆盖uri参数中具有相同名称的任何选项。
	 * @param array $driverOptions Description
	 */
	public function __construct(string $uri = "mongodb://127.0.0.1/", array $uriOptions = [], array $driverOptions = []);
	/**
	 * 执行一个或多个写入操作
	 * @param string $namespace Description
	 * @param \MongoDB\Driver\BulkWrite $bulk
	 * @param \MongoDB\Driver\WriteConcern $writeConcern
	 */
	public function executeBulkWrite(string $namespace, MongoDB\Driver\BulkWrite $bulk, MongoDB\Driver\WriteConcern $writeConcern){
		
	}
	/**
	 * 执行数据库命令
	 * @param string $db Description
	 * @param MongoDB\Driver\Command $command Description
	 * @param MongoDB\Driver\ReadPreference $readPreference Description
	 */
	public function executeCommand(string $db, MongoDB\Driver\Command $command, MongoDB\Driver\ReadPreference $readPreference){

	}

	/**
	 * 执行数据库查询
	 * @param string $namespace
	 * @param \MongoDB\Driver\MongoDB\Driver\Query $query
	 * @param \MongoDB\Driver\MongoDB\Driver\ReadPreference $readPreference
	 */
	public function executeQuery(string $namespace, MongoDB\Driver\Query $query, MongoDB\Driver\ReadPreference $readPreference){

	}

	/**
	 *
	 */
	public function getReadConcern(){

	}

	/**
	 *
	 */
	public function getReadPreference(){

	}

	public function getServers(){

	}

	public function getWriteConcern(){

	}

	/**
	 *
	 * @param \MongoDB\Driver\MongoDB\Driver\ReadPreference $readPreference
	 */
	public function selectServer(MongoDB\Driver\ReadPreference $readPreference){

	}

}