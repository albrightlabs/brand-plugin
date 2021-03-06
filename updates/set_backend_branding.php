<?php namespace Albrightlabs\Brand\Updates;

use Db;
use October\Rain\Database\Updates\Migration;

class SetBackendBranding extends Migration
{
    public function up()
    {
      Db::table('system_settings')->insert(
        ['item' => 'backend_brand_settings', 'value' => '{"app_name":"Albright Labs","app_tagline":"Albright Labs","primary_color":"#222222","secondary_color":"#fdcb6e","accent_color":"#3498db","menu_mode":"inline","sidenav_mode":"side","custom_css":""}']
      );
    }

    public function down(){

    }
}
