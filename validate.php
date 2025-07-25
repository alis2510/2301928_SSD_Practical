<?php

function is_xss($input) {
    return preg_match('/<script|onerror=|onload=|<.*?>/i', $input);
}

function is_sql_injection($input) {
    return preg_match('/(--|\b(SELECT|INSERT|DELETE|DROP|UNION|UPDATE)\b|["\']|;)/i', $input);
}
