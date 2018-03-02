<?php
/**
 * Created by PhpStorm.
 * User: mukesh
 * Date: 1/4/17
 * Time: 12:50 PM
 */

namespace App;
use App\Insertimagewtg;
use App\Insertlangwtg;
use App\Insertlinkwtg;
use App\Insertvideowtg;
use App\Insertariawtg;
use App\Insertblinkwtg;
use App\Insertclickherewtg;
use App\Insertlabelwtg;
use App\Insertmarqueewtg;
use App\Inserttablecaptionwtg;

class RankHelper
{

    public static function accessibilitySaver($domain)
    {
        $img_wtg = Insertimagewtg::where('domain',$domain)->value('img_wtg');
        $blink_wtg = Insertblinkwtg::where('domain',$domain)->value('blink_wtg');
        $click_here_wtg = Insertclickherewtg::where('domain',$domain)->value('click_here_wtg');
        $aria_wtg = Insertariawtg::where('domain',$domain)->value('aria_wtg');
        $label_wtg = Insertlabelwtg::where('domain',$domain)->value('label_wtg');
        $lang_wtg = Insertlangwtg::where('domain',$domain)->value('lang_wtg');
        $link_wtg = Insertlinkwtg::where('domain',$domain)->value('link_wtg');
        $marquee_wtg = Insertmarqueewtg::where('domain',$domain)->value('marquee_wtg');
        $table_caption_wtg = Inserttablecaptionwtg::where('domain',$domain)->value('table_caption_wtg');
        $video_wtg = Insertvideowtg::where('domain',$domain)->value('video_wtg');
        $longdesc_wtg = Insertlongdescwtg::where('domain',$domain)->value('long_desc_wtg');
        //Do for all table
        $accessibilty = $img_wtg + $blink_wtg + $click_here_wtg + $aria_wtg + $label_wtg + $lang_wtg + $blink_wtg + $link_wtg + $marquee_wtg + $table_caption_wtg + $video_wtg + $longdesc_wtg;
        $save_obj = \DB::table('web_urls')
            ->where('domain',$domain)
            ->update(['accessibility' => $accessibilty]);

    }
    public static function test($domain){
        $det_data = Getallvalues::getallvalues($domain);
        return view('admin.rtm_app.sec')->with("data",$det_data);
    }
}