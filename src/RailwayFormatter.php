<?php

namespace Stein\Monolog\Formatter;

use Monolog\Formatter\FormatterInterface;
use Monolog\LogRecord;

class RailwayFormatter implements FormatterInterface
{

    /**
     * @param LogRecord $record
     * @return mixed
     */
    public function format(LogRecord $record): string
    {
        $log = [
            'msg' => $record['message'],
            'level' => strtolower($record['level_name']),
        ];

        // Add custom attributes
        foreach ($record['context'] as $key => $value) {
            $log[$key] = $value;
        }

        return json_encode($log);
    }

    /**
     * @param array $records
     * @return mixed
     */
    public function formatBatch(array $records): string
    {
        return json_encode(array_map([$this, 'format'], $records));
    }
}
