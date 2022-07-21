<?php

namespace App\DataTables\Formatters;

use DateTime;
use Illuminate\Support\Facades\Date;
use Yajra\DataTables\Contracts\Formatter;

class DateFormatter implements Formatter
{
    /**
     * @var string
     */
    public $format;

    public function __construct($format = 'd/m/Y H:i:s')
    {
        $this->format = $format;
    }

    public function format($value, $row)
    {
        if ($value instanceof DateTime) {
            return $value->format($this->format);
        }

        return $value ? Date::parse($value)->setTimezone(config('app.timezoe'))->format($this->format) : '';
    }
}
