<?php
/**
 * Created by PhpStorm.
 * User: mukesh
 * Date: 1/4/17
 * Time: 12:47 PM
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

class SaveHelper
{
    public static function saveImage($image,$domain)
    {
        $img_obj = new Insertimagewtg();
        $img_obj->domain = $domain;
        $img_obj->total  = $image->count_image;
        $img_obj->alt_tag = $image->count_alt;
        $img_obj->img_wtg = $image->image_wtg;
        $img_obj->save();
    }

    public static function saveLang($lang,$domain)
    {
        $lang_obj = new Insertlangwtg();
        $lang_obj->domain = $domain;
        $lang_obj->lang_existance  = $lang->lang_existance;
        $lang_obj->lang = $lang->lang;
        $lang_obj->lang_wtg = $lang->lang_wtg;
        $lang_obj->save();
    }

    public static function saveLabel($label,$domain)
    {
        $label_obj = new Insertlabelwtg();
        $label_obj->domain = $domain;
        $label_obj->total_input  = $label->total_input;
        $label_obj->total_label =  $label->total_label;
        $label_obj->label_wtg = $label->label_wtg;
        $label_obj->save();
    }

    public static function saveLink($link,$domain)
    {
        $link_obj = new Insertlinkwtg();
        $link_obj->domain = $domain;
        $link_obj->total_links  = $link->total_links;
        $link_obj->total_alt =  $link->total_alt;
        $link_obj->link_wtg = $link->link_wtg;
        $link_obj->save();
    }
    public static function saveTable($caption,$domain)
    {
        $caption_obj = new Inserttablecaptionwtg();
        $caption_obj->domain = $domain;
        $caption_obj->total_tables  = $caption->total_tables;
        $caption_obj->total_captions =  $caption->total_captions;
        $caption_obj->table_caption_wtg = $caption->table_caption_wtg;
        $caption_obj->save();
    }

    public static function saveClickhere($clickhere,$domain)
    {
        $clickhere_obj = new Insertclickherewtg();
        $clickhere_obj->domain = $domain;
        $clickhere_obj->click_here_status  = $clickhere->click_here_status;
        $clickhere_obj->click_here_wtg =  $clickhere->click_here_wtg;
        $clickhere_obj->save();
    }

    public static function saveAria($aria,$domain)
    {
        $aria_obj = new Insertariawtg();
        $aria_obj->domain = $domain;
        $aria_obj->main_wtg  = $aria->main_wtg;
        $aria_obj->navigation_wtg =  $aria->navigation_wtg;
        $aria_obj->aria_wtg = $aria->aria_wtg;
        $aria_obj->save();
    }

    public static function saveMarquee($marq,$domain)
    {
        $marq_obj = new Insertmarqueewtg();
        $marq_obj->domain = $domain;
        $marq_obj->marquee_status  = $marq->marquee_status;
        $marq_obj->marquee_wtg =  $marq->marquee_wtg;
        $marq_obj->save();
    }
    public static function saveBlink($blink,$domain)
    {
        $blink_obj = new Insertblinkwtg();
        $blink_obj->domain = $domain;
        $blink_obj->blink_status = $blink->blink_status;
        $blink_obj->blink_wtg =  $blink->blink_wtg;
        $blink_obj->save();
    }
    public static function saveVideo($video,$domain)
    {
        $video_obj = new Insertvideowtg();
        $video_obj->domain = $domain;
        $video_obj->total_videos = $video->total_videos;
        $video_obj->total_transcripts =  $video->total_transcripts;
        $video_obj->video_wtg =  $video->video_wtg;
        $video_obj->save();
    }

    public static function saveLongdesc($long,$domain)
    {

        $long_obj = new Insertlongdescwtg();
        $long_obj->domain = $domain;
        $long_obj->total_images = $long->total_images;
        $long_obj->total_long_desc =  $long->total_long_desc;
        $long_obj->long_desc_wtg =  $long->long_desc_wtg;
        $long_obj->save();
    }

}