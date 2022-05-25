<?php

function md_sha($str) {
    return md5(sha1($str));
}
