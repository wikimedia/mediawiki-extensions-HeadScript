<?php

class HeadScript {
    
    //Code for adding the head script to the wiki
    public static function BeforePageDisplay( OutputPage &$out, Skin &$skin ) {
        global $wgHeadScriptCode, $wgHeadScriptName;
        
        $out->addHeadItem($wgHeadScriptName, $wgHeadScriptCode );

        return true;
    }
}
