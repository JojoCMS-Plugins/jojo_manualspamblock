<?php
/**
 * Jojo CMS
 *
 * Copyright 2009 Jojo CMS
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_manualspamblock
 */
class Jojo_Plugin_Jojo_manualspamblock extends Jojo_Plugin
{
    function comments_enabled($original_setting)
    {
        foreach (Jojo::listPlugins('external/ManualSpamBlocker/ManualSpamBlocker.class.php') as $pluginfile) {
            require_once($pluginfile);
            break;
        }
        $msb = new ManualSpamBlocker( _SITEURL );
        if ( $msb->isDodgy() ) {
            return false;
        } else {
            return $original_setting;
        }
    }

}