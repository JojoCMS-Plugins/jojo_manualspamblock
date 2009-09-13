<?php
/*
Plugin Name: ManualSpamBlocker
Plugin URI: http://www.ragepank.com/msb
Description: Closes comments for visitors that arrive via a "add url" or "post comment" search query, on the assumption that their comments will be rubbish anyway.
Version: 0.1
Author: Harvey Kane
Author URI: http://www.ragepank.com

Copyright 2009  Harvey Kane  (email : code@ragepank.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

/* register hooks */
add_action( 'wp_head', 'msb_wp_head' );
add_action( 'comments_open', 'msb_comments_open' );

function msb_wp_head()
{
    include_once( dirname(__FILE__) . '/ManualSpamBlocker.class.php' );
    $msb = new ManualSpamBlocker( get_option('siteurl') );
    $msb->set();    
    return true;
}

function msb_comments_open($original_setting)
{
    include_once( dirname(__FILE__) . '/ManualSpamBlocker.class.php' );
    $msb = new ManualSpamBlocker( get_option('siteurl') );
    if ( $msb->isDodgy() ) {
        return false;
    } else {
        return $original_setting;
    }
}

