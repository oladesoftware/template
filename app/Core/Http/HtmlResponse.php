<?php

namespace App\Core\Http;

use App\Core\Http\Response;
use Exception;

class HtmlResponse extends Response
{
    /**
     * @param string $contentFileBasename
     * @param string $templateFileBasename
     * @return string
     */
    static public function render(string $contentFileBasename, string $templateFileBasename): string{
        ob_start();
        require(dirname(__DIR__, 2) . "/View/$contentFileBasename.view.php");
        $content = ob_get_clean();

        ob_start();
        require(dirname(__DIR__, 2) . "/View/Layout/$templateFileBasename.view.php");
        return ob_get_clean();
    }
}