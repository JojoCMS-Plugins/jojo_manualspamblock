<?php

foreach (Jojo::listPlugins('external/ManualSpamBlocker/ManualSpamBlocker.class.php') as $pluginfile) {
    require_once($pluginfile);
    break;
}
$msb = new ManualSpamBlocker( _SITEURL );
$msb->set();    
