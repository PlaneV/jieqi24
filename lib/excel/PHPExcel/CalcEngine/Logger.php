<?php

class PHPExcel_CalcEngine_Logger
{
    /**
     * Flag to determine whether a debug log should be generated by the calculation engine
     *		If true, then a debug log will be generated
     *		If false, then a debug log will not be generated
     *
     * @var boolean
     */
    private $_writeDebugLog = false;
    /**
     * Flag to determine whether a debug log should be echoed by the calculation engine
     *		If true, then a debug log will be echoed
     *		If false, then a debug log will not be echoed
     * A debug log can only be echoed if it is generated
     *
     * @var boolean
     */
    private $_echoDebugLog = false;
    /**
     * The debug log generated by the calculation engine
     *
     * @var string[]
     */
    private $_debugLog = array();
    /**
     * The calculation engine cell reference stack
     *
     * @var PHPExcel_CalcEngine_CyclicReferenceStack
     */
    private $_cellStack;
    public function __construct(PHPExcel_CalcEngine_CyclicReferenceStack $stack)
    {
        $this->_cellStack = $stack;
    }
    public function setWriteDebugLog($pValue = false)
    {
        $this->_writeDebugLog = $pValue;
    }
    public function getWriteDebugLog()
    {
        return $this->_writeDebugLog;
    }
    public function setEchoDebugLog($pValue = false)
    {
        $this->_echoDebugLog = $pValue;
    }
    public function getEchoDebugLog()
    {
        return $this->_echoDebugLog;
    }
    public function writeDebugLog()
    {
        if ($this->_writeDebugLog) {
            $message = implode(func_get_args());
            $cellReference = implode(' -> ', $this->_cellStack->showStack());
            if ($this->_echoDebugLog) {
                echo $cellReference;
                echo 0 < $this->_cellStack->count() ? ' => ' : '';
                echo $message;
                echo PHP_EOL;
            }
            $this->_debugLog[] = $cellReference . (0 < $this->_cellStack->count() ? ' => ' : '') . $message;
        }
    }
    public function clearLog()
    {
        $this->_debugLog = array();
    }
    public function getLog()
    {
        return $this->_debugLog;
    }
}