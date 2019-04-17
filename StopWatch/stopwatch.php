<?php
    class StopWatch {
        private $startTime,$endTime;
        function __construct()
        {
            $this->startTime = $startTime;
            $this->endTime = $endTime;
        }
        function get_startTime() {
            return $this->startTime;
        }
        function get_endTime() {
            return $this->endTime;
        }
        function set_startTime() {
            return date('d/m/Y - H:i:s');
        }
    }
