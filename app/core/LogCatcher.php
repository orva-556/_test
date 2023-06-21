<?php

class LogCatcher
{
    private $log_read = "cat ";
    private $log_dir = LOG_DIR;
    private $log_cmd = LOG_CMD;
    // private $log_prompt1 = LOG_PROMPT1;
    // private $log_prompt2 = LOG_PROMPT2;

    private $log_catch;
    private $log_clean;

    // private $log_explode1;
    // private $log_implode;
    // private $log_explode2;
    // private $log_chunk;
    // private $log_result;

    // private $pipe = '|';

    public function catchLog()
    {
        $this->log_catch = shell_exec($this->log_read . $this->log_dir . $this->log_cmd);
        $this->log_clean = array_reverse(array_chunk(explode(" ", implode(" ", array_filter(explode("\n", $this->log_catch)))), 17));
    
        return $this->log_clean;
    }

    // public function getLog()
    // {
    //     // var_dump($this->cleanLog());
    //     return $this->cleanLog();
    // }
}
