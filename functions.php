<?php

function filterRequest($requestename){



    return htmlspecialchars(strip_tags($_POST[$requestename]));
}