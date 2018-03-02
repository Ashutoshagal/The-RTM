<?php
/**
 * Created by PhpStorm.
 * User: mukesh
 * Date: 2/4/17
 * Time: 4:33 PM
 */

namespace App;


class PdfGenerator
{
    public static function generatePDF($html, $file_name, $save_file = false, $site_alias = null, $dir_name = null)
    {
// $site_alias = config('vod.active_site');
        $file_name = "hello";
        $file_path = "/var/www/";
        $snappy = new Pdf(base_path('/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'));
        $snappy->generateFromHtml($html, $file_path.$file_name, [], true);
// chmod($file_path.$file_name, 0777);
// if($save_file){2
// $file_path = public_path()."/shared/".$site_alias."/$dir_name/";
// // check if filepath exists or not
// if(!file_exists($file_path)){
// mkdir($file_path, 0777, true);
// }
//$output = $dompdf->output();
//file_put_contents($file_path.$file_name, $output);
// chmod($file_path.$file_name, 0777);
        chmod($file_path.$file_name, 0777);
        return $file_path.$file_name;
    }

}