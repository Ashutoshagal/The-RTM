<?php
/**
 * Created by PhpStorm.
 * User: mukesh
 * Date: 1/4/17
 * Time: 3:35 PM
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

class Getallvalues
{
    public static function getallvalues($domain)
    {

        $objimg = new Insertimagewtg();

        $imagedata = new \stdClass();
        $imagedata->domain  = $objimg->where('domain', $domain)->value('domain');
        $imagedata->type    = "Image";
        $imagedata->total   = $objimg->where('domain', $domain)->value('total');
        $imagedata->alt_tag = $objimg->where('domain', $domain)->value('alt_tag');
        $imagedata->img_wtg = $objimg->where('domain', $domain)->value('img_wtg');

        $objlang = new Insertlangwtg();
        $langdata  =  new \stdClass();
        $langdata->domain         = $objlang->where('domain', $domain)->value('domain');
        $langdata->type           = "Language";
        $langdata->lang_existance = $objlang->where('domain', $domain)->value('lang_existance');
        $langdata->lang           = $objlang->where('domain', $domain)->value('lang');
        $langdata->lang_wtg       = $objlang->where('domain', $domain)->value('lang_wtg');

        $objlabel = new Insertlabelwtg();
        $labeldata = new \stdClass();
        $labeldata->domain      = $objlabel->where('domain', $domain)->value('domain');
        $labeldata->type        = "Label";
        $labeldata->total_input = $objlabel->where('domain', $domain)->value('total_input');
        $labeldata->total_label = $objlabel->where('domain', $domain)->value('total_label');
        $labeldata->label_wtg   = $objlabel->where('domain', $domain)->value('label_wtg');

        $objlink = new Insertlinkwtg();
        $linkdata  = new \stdClass();
        $linkdata->domain      = $objlink->where('domain', $domain)->value('domain');
        $linkdata->type        = "Link";
        $linkdata->total_links = $objlink->where('domain', $domain)->value('total_links');
        $linkdata->total_alt   = $objlink->where('domain', $domain)->value('total_alt');
        $linkdata->link_wtg    = $objlink->where('domain', $domain)->value('link_wtg');

        $objtable = new Inserttablecaptionwtg();
        $tabledata  = new \stdClass();
        $tabledata->domain          = $objtable->where('domain', $domain)->value('domain');
        $tabledata->type            = "Table";
        $tabledata->total_tables    = $objtable->where('domain', $domain)->value('total_tables');
        $tabledata->total_captions  = $objtable->where('domain', $domain)->value('total_captions');
        $tabledata->table_caption_wtg = $objtable->where('domain', $domain)->value('table_caption_wtg');

        $objclick = new Insertclickherewtg();
        $clickdata = new \stdClass();
        $clickdata->domain             = $objclick->where('domain', $domain)->value('domain');
        $clickdata->type                = "Click";
        $clickdata->click_here_status = $objclick->where('domain', $domain)->value('click_here_status');
        $clickdata->click_here_wtg    = $objclick->where('domain', $domain)->value('click_here_wtg');

        $objaria = new Insertariawtg();
        $ariadata = new \stdClass();
        $ariadata->domain         = $objaria->where('domain', $domain)->value('domain');
        $ariadata->type           = "Aria";
        $ariadata->main_wtg       = $objaria->where('domain', $domain)->value('main_wtg');
        $ariadata->navigation_wtg = $objaria->where('domain', $domain)->value('navigation_wtg');
        $ariadata->aria_wtg       = $objaria->where('domain', $domain)->value('aria_wtg');

        $objmarquee = new Insertmarqueewtg();
        $marqueedata = new \stdClass();
        $marqueedata->domain         = $objmarquee->where('domain', $domain)->value('domain');
        $marqueedata->type             = "Marquee";
        $marqueedata->marquee_status = $objmarquee->where('domain', $domain)->value('marquee_status');
        $marqueedata->marquee_wtg    = $objmarquee->where('domain', $domain)->value('marquee_wtg');

        $objblink = new Insertblinkwtg();
        $blinkdata = new \stdClass();
        $blinkdata->domain       = $objblink->where('domain', $domain)->value('domain');
        $blinkdata->type           = "Blink";
        $blinkdata->blink_status = $objblink->where('domain', $domain)->value('blink_status');
        $blinkdata->blink_wtg    = $objblink->where('domain', $domain)->value('blink_wtg');

        $objvideo = new Insertvideowtg();
        $videodata = new \stdClass();
        $videodata->domain           = $objvideo->where('domain', $domain)->value('domain');
        $videodata->type            = "Video";
        $videodata->total_videos      = $objvideo->where('domain', $domain)->value('total_videos');
        $videodata->total_transcripts = $objvideo->where('domain', $domain)->value('total_transcripts');
        $videodata->video_wtg         = $objvideo->where('domain', $domain)->value('video_wtg');

        $objlong = new Insertlongdescwtg();
        $longdata = new \stdClass();
        $longdata->domain       = $objlong->where('domain', $domain)->value('domain');
        $longdata->type         = "Long-Description";
        $longdata->total_images = $objlong->where('domain', $domain)->value('total_images');
        $longdata->total_long_desc = $objlong->where('domain', $domain)->value('total_long_desc');
        $longdata->long_desc_wtg = $objlong->where('domain', $domain)->value('long_desc_wtg');


//
//        $allinone = new \stdClass();
//        $allinone->domain = $imagedata[0];
//        $allinone->total_images = $imagedata[1];
//        $allinone->total_alts = $imagedata[2];
//        $allinone->image_weightage = $imagedata[3];
//
//        $allinone->domain = $langdata[0];
//        $allinone->language_existance = $langdata[1];
//        $allinone->language = $langdata[2];
//        $allinone->language_weightage = $langdata[3];
//        //
//        $allinone->domain = $labeldata[0];
//        $allinone->total_inputs = $labeldata[1];
//        $allinone->total_labels = $langdata[2];
//        $allinone->label_weightage = $labeldata[3];
//        //
//        $allinone->domain = $linkdata[0];
//        $allinone->total_links = $linkdata[1];
//        $allinone->total_alts = $linkdata[2];
//        $allinone->link_weightage = $linkdata[3];
//        //
//        $allinone->domain = $tabledata[0];
//        $allinone->total_tables = $tabledata[1];
//        $allinone->total_captions = $tabledata[1];
//        $allinone->tablecaption_weightage = $tabledata[3];
//        //
//        $allinone->domain = $clickdata[0];
//        $allinone->clickhere_status = $clickdata[1];
//        $allinone->clickhere_weightage = $clickdata[2];
//        //
//        $allinone->domain = $ariadata[0];
//        $allinone->main_weightage = $ariadata[1];
//        $allinone->navigation_weightage = $ariadata[2];
//        $allinone->aria_weightage = $ariadata[3];
//        //
//        $allinone->domain = $marqueedata[0];
//        $allinone->marquee_status = $marqueedata[1];
//        $allinone->marquee_weightage = $marqueedata[2];
//        //
//        $allinone->domain = $blinkdata[0];
//        $allinone->blink_status = $blinkdata[1];
//        $allinone->blink_weightage = $blinkdata[2];
//        //
//        $allinone->domain = $videodata[0];
//        $allinone->total_videos = $videodata[1];
//        $allinone->total_transcripts = $videodata[2];
//        $allinone->video_weightage = $videodata[3];
//        //
//        $allinone->domain = $longdata[0];
//        $allinone->total_long_images = $longdata[1];
//        $allinone->total_long_desc = $longdata[2];
//        $allinone->long_desc_wtg = $longdata[3];
//
        $res =['image'=>$imagedata,'lang'=>$langdata,'label'=>$labeldata,'link'=>$linkdata,'table'=>$tabledata,'click'=>$clickdata,
            'aria'=>$ariadata,'marq'=>$marqueedata,'blink'=>$blinkdata,'video'=>$videodata,'long'=>$longdata];
        return json_decode(json_encode($res),true);

    }


}