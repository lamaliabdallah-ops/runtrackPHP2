<?php
function occurrences($str,$char){
    return substr_count($str,$char);
}
echo occurrences("bonjour","o")
?>