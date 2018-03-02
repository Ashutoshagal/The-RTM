<?php
/**
 * Created by PhpStorm.
 * User: mukesh
 * Date: 1/4/17
 * Time: 12:26 PM
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


class TestHelper
{
    const ARIA = 7;
    const BLINK = 6;
    const CLICK_HERE = 12;
    const FIELD_SET = 6;
    const ALT = 15;
    const LABEL = 13;
    const LANG = 5;
    const LINK = 9;
    const LONG_DESC = 7;
    const MARQUEE = 6;
    const TABLE_CAPTION = 9;
    const VIDEO = 11;


    public static function imageTest($url)
    {
        $page = file_get_contents($url);
        $doc = new \DOMDocument();
        @$doc->loadHtml($page);
        $count_image = 0;
        $count_alt = 0;

        $tags = $doc->getElementsByTagName('img');
        foreach ($tags as $tag) {
            if ($tag->getAttribute('src')) {
                $count_image++;
            }
        }
        foreach ($tags as $tag) {
            if ($tag->getAttribute('alt')) {
                $count_alt++;
            }
        }

        if(empty($count_image))
        {
            $image_wtg = self::ALT;
        }
        else {

            $image_wtg = ($count_alt / $count_image) * (self::ALT);
        }
        $image_obj = new \stdClass();
        $image_obj->count_image = $count_image;
        $image_obj->count_alt = $count_alt;
        $image_obj->image_wtg = $image_wtg;
        return $image_obj;
    }
    public static function langTest($url)
    {
        $page = file_get_contents($url);
        $doc = new \DOMDocument();
        @$doc->loadHtml($page);
        $count = 0;
        $tags= $doc->getElementsByTagName('html');

        foreach ($tags as $tag)
        {
            if($tag->getAttribute('lang'))
            {
                $lan = $tag->getAttribute('lang');
                $count++;
            }

        }

        if(empty($count))
        {
            $language =  "";
            $lang_wtg = (0*self::LANG);
            $language_existance = "No";
        }
        else
        {
            $lang_wtg = (1*self::LANG);
            $language_existance = "Yes";
            $language =  "$lan";

        }
        $lang_obj = new \stdClass();
        $lang_obj->lang_existance  = $language_existance;
        $lang_obj->lang = $language;
        $lang_obj->lang_wtg   = $lang_wtg;
        return $lang_obj;
    }

    public static function labelTest($url)
    {
        $counti=0;
        $countl=0;
        $page = file_get_contents($url);
        $doc = new \DOMDocument();
        @$doc->loadHtml($page);
        $tags = $doc->getElementsByTagName('form');

        foreach ($tags as $tag) {

            $tag = $doc->getElementsByTagName('input');
            if( $tag = $doc->getElementsByTagName('input'))
            {
                $counti++;
            }

        }
        $cinput = $counti;

        if (empty($cinput)) {

            $cinput = 0;
        }
        foreach ($tags as $tagv)
        {

            $tagv = $doc->getElementsByTagName('label');
            if( $tagv = $doc->getElementsByTagName('label'))
            {
                $countl++;
            }


        }
        $clabel = $countl;

        if (empty($clabel)) {
            $clabel = 0;
        }

        if($cinput == $clabel){

            if (empty($cinput)) {


                $label_wtg = self::LABEL;

            }
            else{

                $label_wtg = self::LABEL;
            }
        }
        else {


            $label_wtg = ($clabel / $cinput) * self::LABEL;
        }

        $label_obj = new \stdClass();
        $label_obj->total_input = $cinput;
        $label_obj->total_label = $clabel;
        $label_obj->label_wtg = $label_wtg;
        return $label_obj;

    }

    public static function linkTest($url)
    {
        $page = file_get_contents($url);
        $doc = new \DOMDocument();
        @$doc->loadHtml($page);
        $count_a   = 0;
        $count_alt = 0;
        $tags      = $doc->getElementsByTagName('a');
        foreach ($tags as $tag)
        {
            if($tag->getAttribute('href'))
            {
                $count_a++;
            }
        }
        foreach ($tags as $tag)
        {
            if($tag->getAttribute('alt'))
            {
                $count_alt++;

            }
        }
        if($count_a == $count_alt){

            if (empty($count_a)) {


                $countL = self::LINK;

            }
            else{

                $countL = self::LINK;
            }
        }
        else {
            $countL = ($count_alt / $count_a) * self::LINK;
        }

        $link_obj = new \stdClass();
        $link_obj->total_links = $count_a;
        $link_obj->total_alt = $count_alt;
        $link_obj->link_wtg = $countL;
        return $link_obj;



    }

    public  static function Tablecaptiontest($url)
    {
        $page  = file_get_contents($url);
        $doc   = new \DOMDocument();
        @$doc->loadHtml($page);
        $tags = $doc->getElementsByTagName('body');
        foreach ($tags as $tag) {
            $tag = $doc->getElementsByTagName('table');
        }

        $c_table = $tags->length;

        if (empty($c_table)) {

            $c_table = 0;
        }

        foreach ($tags as $tag_v)
        {

            $tag_v = $doc->getElementsByTagName('caption');

        }
        $c_caption =$tag_v->length ;

        if (empty($c_caption)) {

            $c_caption = 0;
        }
        if($c_table == $c_caption){

            if (empty($c_table)) {


                $countT = self::TABLE_CAPTION;

            }
            else{

                $countT = self::TABLE_CAPTION;
            }
        }
        else {

            $countT = ($c_caption / $c_table) * self::TABLE_CAPTION;

        }
        $table_obj = new Inserttablecaptionwtg();
        $table_obj->total_tables = $c_table;
        $table_obj->total_captions = $c_caption;
        $table_obj->table_caption_wtg = $countT;
        return $table_obj;
    }

    public static function clickHereTest($url)
    {
        $html = file_get_contents($url);

        $count =1;

        $search_for_1 =  'click here';
        $search_for_2 =  'Click Here';
        $search_for_3 =  'Click here';
        $search_for_4 =  'read more';
        $search_for_5 =  'click here to read more';
        $search_for_6 =  'Click here to read more';

        // the following line prevents the browser from parsing this as HTML.
        header('Content-Type: text/plain');

        // get the file contents, assuming the file to be readable (and exist)
        $contents = $html;
        // escape special characters in the query
        $pattern1 = preg_quote($search_for_1, '/');
        $pattern2 = preg_quote($search_for_2, '/');
        $pattern3 = preg_quote($search_for_3, '/');
        $pattern4 = preg_quote($search_for_4, '/');
        $pattern5 = preg_quote($search_for_5, '/');
        $pattern6 = preg_quote($search_for_6, '/');

        // finalise the regular expression, matching the whole line
        $pattern1 = "/^.*$pattern1.*\$/m";
        $pattern2 = "/^.*$pattern2.*\$/m";
        $pattern3 = "/^.*$pattern3.*\$/m";
        $pattern4 = "/^.*$pattern4.*\$/m";
        $pattern5 = "/^.*$pattern5.*\$/m";
        $pattern6 = "/^.*$pattern6.*\$/m";

        // search, and store all matching occurences in $matches

        //$arrlength=count($searchfor);

        if(preg_match_all($pattern1, $contents, $matches1)){
            $count=0;
        }

        if(preg_match_all($pattern2, $contents, $matches2)){
            $count=0;
        }

        if(preg_match_all($pattern3, $contents, $matches3)){
            $count=0;
        }

        if(preg_match_all($pattern4, $contents, $matches4)){
            $count=0;
        }

        if(preg_match_all($pattern5, $contents, $matches5)){
            $count=0;
        }

        if(preg_match_all($pattern6, $contents, $matches6)){
            $count=0;
        }

        if($count==1)
        {
            $flag_e = "No";
            $click_here_wtg = self::CLICK_HERE;
        }
        else
        {
            $flag_e = "Yes";
            $click_here_wtg = (0 * self::CLICK_HERE);
        }

        $clickhere_obj = new \stdClass();
        $clickhere_obj->click_here_status = $flag_e;
        $clickhere_obj->click_here_wtg = $click_here_wtg;
        return $clickhere_obj;

    }

    public static function arialLandMarkTest($url)
    {
        $html = file_get_contents($url);

        $count_m = 0;
        $count_n = 0;

        $search_for_1 = 'role="main"';
        $search_for_2 = 'role="navigation"';

// the following line prevents the browser from parsing this as HTML.
        header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
        $contents = $html;
// escape special characters in the query
        $pattern1 = preg_quote($search_for_1, '/');
        $pattern2 = preg_quote($search_for_2, '/');

// finalise the regular expression, matching the whole line
        $pattern1 = "/^.*$pattern1.*\$/m";
        $pattern2 = "/^.*$pattern2.*\$/m";

// search, and store all matching occurences in $matches
        if(preg_match_all($pattern1, $contents, $matches1)){
            $count_m++;
        }

        if(preg_match_all($pattern2, $contents, $matches2)){
            $count_n++;
        }
        if($count_m==0)
        {
            $count_m_wtg = (0 * self::ARIA);
        }
        else
        {
            $count_m_wtg = (0.5 * self::ARIA);
        }
        if($count_n==0)
        {
            $count_n_wtg = (0 * self::ARIA);
        }
        else
        {
            $count_n_wtg = (0.5 * self::ARIA);
        }
        $count = $count_m_wtg + $count_n_wtg;


        $aria_obj = new \stdClass();
        $aria_obj->main_wtg = $count_m_wtg;
        $aria_obj->navigation_wtg = $count_n_wtg;
        $aria_obj->aria_wtg = $count;
        return $aria_obj;

    }

    public static function marqueeTest($url)
    {

        $html = file_get_contents($url);

        $doc  = new \DOMDocument();
        @$doc->loadHTML($html);

        $tags1 = $doc->getElementsByTagName('marquee');


        $a = $tags1->length;
        if($a==0)
        {
            $flag_e = "No";
            $count  = self::MARQUEE;
        }
        else
        {
            $flag_e = "Yes";
            $count  = (0 * self::MARQUEE);
        }

        $marquee_obj = new \stdClass();
        $marquee_obj->marquee_status = $flag_e;
        $marquee_obj->marquee_wtg = $count;
        return $marquee_obj;
    }
    public static function blinkTest($url)
    {

        $html = file_get_contents($url);

        $doc = new \DOMDocument();
        @$doc->loadHTML($html);

        $tags1 = $doc->getElementsByTagName('blink');


        $a = $tags1->length;
        if($a == 0)
        {
            $flag_e = "No";
            $count  = self::BLINK;
        }
        else
        {
            $flag_e = "Yes";
            $count  = (0 * self::BLINK);
        }

        $blink_obj = new \stdClass();
        $blink_obj->blink_status = $flag_e;
        $blink_obj->blink_wtg = $count;
        return $blink_obj;

    }

    public static function videoTest($url)
    {

        $count  = 0;
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        $count_a = 0;
        $count_b  = 0;
        $count_c = 0;
        $count_d = 0;

        $html = file_get_contents($url);

        $doc = new \DOMDocument();
        @$doc->loadHTML($html);

        $tags1 = $doc->getElementsByTagName('iframe');
        $tags2 = $doc->getElementsByTagName('object');
        $tags3 = $doc->getElementsByTagName('embed');
        $tags4 = $doc->getElementsByTagName('video');
        $tags5 = $doc->getElementsByTagName('relatetranscript');

        foreach ($tags1 as $tag) {
            $tag->getAttribute('relatetranscript');
            if($tag->getAttribute('relatetranscript'))
                $count_a++;

        }
        foreach ($tags2 as $tag) {
            $tag->getAttribute('relatetranscript');
            if($tag->getAttribute('relatetranscript'))
                $count_b++;

        }
        foreach ($tags3 as $tag) {
            $tag->getAttribute('relatetranscript');
            if($tag->getAttribute('relatetranscript'))
                $count_c++;

        }
        foreach ($tags4 as $tag) {
            $tag->getAttribute('relatetranscript');
            if($tag->getAttribute('relatetranscript'))
                $count_d++;

        }
        $a = $tags1->length ;
        $b = $tags2->length  ;
        $c = $tags3->length  ;
        $d = $tags4->length ;

        $e = $tags5->length ;
        $count = $a+$b+$c+$d;

        $search_for_1 = 'kind="transcript"';
        $search_for_2 = 'rel="transcript"';
        $search_for_3 = 'itemprop="transcript"';

        // the following line prevents the browser from parsing this as HTML.
        header('Content-Type: text/plain');

        // get the file contents, assuming the file to be readable (and exist)
        $contents = $html;

        // escape special characters in the query
        $pattern1 = preg_quote($search_for_1, '/');
        $pattern2 = preg_quote($search_for_2, '/');
        $pattern3 = preg_quote($search_for_3, '/');

        // finalise the regular expression, matching the whole line
        $pattern1 = "/^.*$pattern1.*\$/m";
        $pattern2 = "/^.*$pattern2.*\$/m";
        $pattern3 = "/^.*$pattern3.*\$/m";

        // search, and store all matching occurences in $matches
        if(preg_match_all($pattern1, $contents, $matches1)){
            $count1++;
        }
        if(preg_match_all($pattern2, $contents, $matches2)){
            $count2++;
        }
        if(preg_match_all($pattern3, $contents, $matches3)){
            $count3++;
        }
        $count4=$count_a+$count_b+$count_c+$count_d;

        $countT=$count1+$count2+$count3+$count4+$e;

        $countT;

        if($count == $countT){

            if (empty($count)) {


                $video_wtg = self::VIDEO;

            }
            else{

                $video_wtg = self::VIDEO;
            }
        }
        else {

            $video_wtg = ($countT / $count) * self::VIDEO;
        }


        $video_obj = new \stdClass();
        $video_obj->total_videos = $count;
        $video_obj->total_transcripts = $countT;
        $video_obj->video_wtg = $video_wtg;
        return $video_obj;


    }

    public static function longDescTest($url)
    {
        $count_long = 0;
        $html = file_get_contents($url);

        $doc  = new \DOMDocument();
        @$doc->loadHTML($html);

        $tags = $doc->getElementsByTagName('img');

        foreach ($tags as $tag) {
            $tag->getAttribute('longdesc');
            if($tag->getAttribute('longdesc'))
                $count_long++;

        }

        $total_img = $tags->length ;
        if($total_img == $count_long){

            if (empty($total_img)) {
                $wtg_long_desc = self::LONG_DESC;
            }
            else{
                $wtg_long_desc = self::LONG_DESC;
            }
        }
        else {

            $wtg_long_desc = ($count_long / $total_img) * self::LONG_DESC;
        }



        $long_obj = new \stdClass();
        $long_obj->total_images = $total_img;
        $long_obj->total_long_desc = $count_long;
        $long_obj->long_desc_wtg = $wtg_long_desc;
        return $long_obj;


    }


}




