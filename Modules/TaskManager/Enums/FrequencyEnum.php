<?php

namespace Modules\TaskManager\Enums;

enum FrequencyEnum: string
{
    case EVERY_DAY = 'every day';
    case EVERY_MONDAY = 'every monday';
    case EVERY_MONDAY_WEDNESDAY_AND_FRIDAY = 'every monday, wednesday and friday';
    case EVERY_FIFTH_OF_EACH_MONTH = 'Every fifth of each month';
    case EVERY_FIFTH_OF_MARCH_OF_EACH_YEAR = 'Every fifth of march of each year';
}
