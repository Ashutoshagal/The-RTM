<?php

namespace App\Http\Controllers;
use App\Getallvalues;
use App\RankHelper;
use App\GetWebUrls;
use App\TestHelper;
use App\SaveHelper;
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

use Illuminate\Http\Request;
use League;

class HomePageController extends Controller
{
    public function index(Request $request)
    {

        $url1  = $request->request->all();

        if(isset($url)) {


            $check_url = self::checkValidityOfUrl($url);
            if ($check_url == true) {
                $domain = self::getDomain($url);
                $check = GetWebUrls::where('domain', $domain)->value('domain');
                self::UrlContent($url, $domain);
                if (empty($check)) {
                    self::storeUrl($domain, $url);
                    self::startTest($url);
                    RankHelper::accessibilitySaver($domain);
                }
                $det_data = Getallvalues::getallvalues(self::getDomain($url));
                return view('admin.rtm_app.sec')->with("data",$det_data);

            } else {
              //  return 'Please enter a valid url';
                $msg = "You Entered Invalid Url OR Entered Url is Alredy Checked ... Please Try Again With Valid OR New Url ";
                return view('welcome')->with("data", $msg);

            }
        }



    }

    public function individualReport(Request $request)
    {
        $url = $request->input('url');
        if (isset($url)) {

            $check_url = self::checkValidityOfUrl($url);
            if ($check_url == false) {
                $domain = self::getDomain($url);
                $check = GetWebUrls::where('domain', $domain)->value('domain');
                self::UrlContent($url, $domain);
                if (empty($check)) {
                    self::storeUrl($domain, $url);
                    self::startTest($url);
                    RankHelper::accessibilitySaver($domain);
                }

                $det_data = Getallvalues::getallvalues(self::getDomain($url));
                return view('admin.rtm_app.sec')->with("data", $det_data);

            } else {

                $msg = "You Entered Invalid Url OR Entered Url is Alredy Checked ... Please Try Again With Valid OR New Url ";
                return view('welcome')->with("data", $msg);

            }
        }
    }


    public static function getDomain($url)
    {
        $get_domain  = League\Url\Url::createFromUrl(urldecode($url));
        $host_obj    = $get_domain->getHost();
        return $host_obj->get();
    }

    public static function checkValidityOfUrl($url)
    {
       // if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            //return true;
       // } else {
         return false;

    }

    public function UrlContent($url,$domain)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$url",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: ada0a88c-2186-1c59-90fc-7e9240dc4662"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $domain = "$domain";
        $path = "/var/www/rtm.com/public/url_files/";
        if(!file_exists("$path"."$domain"."."."txt")) {
            file_put_contents("$path"."$domain"."."."txt", $response);
            chmod("$path"."$domain"."."."txt", 0777);
        }
        curl_close($curl);
    }


    public static function storeUrl($domain,$url)
    {
        $web_url         = new GetWebUrls();
        $web_url->domain = $domain;
        $web_url->url    = $url;
        $web_url->accessibility = null;
        $web_url->save();
    }

    public static function startTest($url)
    {
        $domain      = self::getDomain($url);
        $url_file = "/var/www/rtm.com/public/url_files/"."$domain"."."."txt";
        $image = TestHelper::imageTest($url_file);
        SaveHelper::saveImage($image,$domain);
        $lang  = TestHelper::langTest($url_file);
        SaveHelper::saveLang($lang,$domain);
        $label  = TestHelper::labelTest($url_file);
        SaveHelper::saveLabel($label,$domain);
        $link  = TestHelper::linkTest($url_file);
        SaveHelper::saveLink($link,$domain);
        $caption  = TestHelper::Tablecaptiontest($url_file);
        SaveHelper::saveTable($caption,$domain);
        $clickhere  = TestHelper::clickHereTest($url_file);
        SaveHelper::saveClickhere($clickhere,$domain);
        $aria  = TestHelper::arialLandMarkTest($url_file);
        SaveHelper::saveAria($aria,$domain);
        $marq  = TestHelper::marqueeTest($url_file);
        SaveHelper::saveMarquee($marq,$domain);
        $blink  = TestHelper::blinkTest($url_file);
        SaveHelper::saveBlink($blink,$domain);
        $video = TestHelper::videoTest($url_file);
        SaveHelper::saveVideo($video,$domain);
        $longdesc = TestHelper::longDescTest($url_file);
        SaveHelper::saveLongdesc($longdesc,$domain);
    }

    public function test(){
        $hello = [10,20,30,40,50,60,70,80,90,100];
        return view('admin.rtm_app.sec')->with(compact('hello'));
    }

    public static function homepage(){
        $accessibility = GetWebUrls::orderBy('accessibility','domain')->get();
        $order_by_response = json_decode(json_encode($accessibility),true);
        return view('admin.rtm_app.rtmhome')
            ->with('url',$order_by_response)
            ->with('c',1);
    }
}
