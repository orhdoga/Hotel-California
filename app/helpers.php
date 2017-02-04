<?php

function is_current_page($path) {
    return app('request')->path() == trim($path, '/');
}