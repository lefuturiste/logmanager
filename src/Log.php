<?php
namespace LogManager;

/**
 * Class Log
 * Generate log quickly and easily with time, level of warning and client IP
 * @package LogManager
 */
class Log{

    /**
     * @var Config for this class
     */
	public $config = [
			"enabled" => true
			"folder" => "log/"
		];

    /*
     * @param $config array Config for this class
     */
	public function __construct($config = []){
		$this->config = array_merge($this->config, $config);
	}

	/*
	 * @param $msg string Message to include in log file
	 */
    public function info($msg){
        return $this->log('INFO', $msg);
    }

    /*
     * @param $msg string Message to include in log file
     */
    public function success($msg){
        return $this->log('SUCCESS', $msg);
    }

    /*
     * @param $msg string Message to include in log file
     */
    public function error($msg){
        return $this->log('ERROR', $msg);
    }

    /*
     * @param $msg string Message to include in log file
     */
    public function warning($msg){
        return $this->log('WARNING', $msg);
    }

    /*
     * @param $level string level to this log line
     * @param $msg string message to print in log file
     * @return boolean
     */
    private function log($level, $msg){
    	if ($this->config['enabled']) {    		
	        if (!file_exists($this->config['folder'] . date('Y') . '/' . date('m') . '/' . date('d'))){

	            mkdir($this->config['folder'] . date('Y') . '/' . date('m') . '/' . date('d'), 0777, true);

	        }

	        $file = fopen($this->config['folder'] . date('Y') . '/' . date('m') . '/' . date('d') . '/log.log', 'a+');
	        $str =
	            '[' . $level . '] ' .
	            '[' . date('Y/m/d H:i:s') . ']' . ' ' .
	            'From: ' . $_SERVER['REMOTE_ADDR'] . ' --+ ' .
	            $msg .
	            "\n";
	        fputs($file, $str);
	        fclose($file);

	        return true;
    	}else{
    		return false;
    	}
    }
}
