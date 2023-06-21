<?php

class Log_model
{
    private $logSource;
    private $logCount;

    public function __construct()
    {
        $this->logSource = new LogCatcher;
    }

    public function getAllLog()
    {

        // $output = array();

        foreach ($this->logSource->catchLog() as $logList) {

            $origin_snort_timestamp_format = 'm/d/y-H:i:s.u';

            $logValue['id'] = $logList['3'];
            // $logValue['rsyslog_date'] = $logList['0'];
            // $logValue['rsyslog_time'] = $logList['1'];
            $logValue['rsyslog_date'] = date('d/m/Y', strtotime($logList['0']));
            $logValue['rsyslog_time'] = date('H:i:s ', strtotime($logList['1']));
            $logValue['snort_date'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('d/m/Y');
            $logValue['snort_time'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('H:i:s');
            $logValue['target_hostname'] = $logList['2'];
            $logValue['target_ip'] = $logList['8'];
            $logValue['target_port'] = $logList['9'];
            $logValue['target_mac_addr'] = $logList['15'];
            $logValue['attacker_ip'] = $logList['6'];
            $logValue['attacker_port'] = $logList['7'];
            $logValue['attacker_mac_addr'] = $logList['14'];
            $logValue['protocol'] = $logList['10'];
            $logValue['flags'] = $logList['11'];
            $logValue['rev'] = $logList['13'];
            $logValue['tcplen'] = $logList['16'];
            $logValue['sid'] = $logList['12'];
            if ($logValue['sid'] == "1000003") {
                $logValue['type'] = "SSH Brute Force";
                $logValue['service'] = "SSH";
                $logValue['method'] = "Brute Force";
            } else if ($logValue['sid'] == "1000002") {
                $logValue['type'] = "FTP Brute Force";
                $logValue['service'] = "FTP";
                $logValue['method'] = "Brute Force";
            } else if ($logValue['sid'] == "1000001") {
                $logValue['type'] = "SQL Injection";
                $logValue['service'] = "Database";
                $logValue['method'] = "SQL Injection";
            }

            $output[] = $logValue;

        }
        // var_dump($output);
        return $output;

    }

    public function countLog()
    {
        $this->logCount = count($this->logSource->catchLog());
        return $this->logCount;
    }
}