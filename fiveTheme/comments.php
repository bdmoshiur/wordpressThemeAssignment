<?php

wp_list_comments();
if ( ! comments_open() ) {
    echo "<h2>All Comments are Close</h2>";
}
comment_form();