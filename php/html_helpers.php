<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/11/2017
 * Time: 16:43
 */

class html_helpers
{
    public static function get_footer() :string
    {
        $copyright = html_helpers::get_copyright_notice();
        return "
        <footer>
            <hr>
            <div class=\"container-fluid justify-content-center\">
                <div class=\"row text-center    \">
                    <div class=\"col-xs-12\">
                        $copyright
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    public static function get_copyright_notice() : string
    {
        $year = date("Y");

        if ($year != 2017){
            return "<p>Copyright © <a href=\"https://github.com/Civ-Dev\">Civ-Dev</a>. All rights reserved 2017 - $year .</p>";
        }else{
            return '<p>Copyright © <a href="https://github.com/Civ-Dev">Civ-Dev</a>. All rights reserved 2017. </p>';
        }
    }
}