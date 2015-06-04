<?php

class ClearText {
 
    public static function sanitize(&$text) {
        $output = $text;

        if (is_array($text)) {
            foreach ($text as $var => $val) {
                ClearText::sanitize($val);
                $output[$var] = $val;
            }
        } else {
            if (get_magic_quotes_gpc()) {
                $output = stripslashes($text);
            }
            $text = ClearText::cleanInput($text);
            $output = mysql_real_escape_string($text);
        }
        $text = $output;
    }

    public static function cleanInput($input) {

        $search = array(
            '@<script[^>]*?>.*?</script>@si', // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU', // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );

        $output = preg_replace($search, '', $input);
        return $output;
    }

}
