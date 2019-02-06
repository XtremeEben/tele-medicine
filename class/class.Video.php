require "./vendor/autoload.php";

use OpenTok\OpenTok;

class Video {
    private $video;

    function __construct() {
        $this->video = new OpenTok($apiKey, $apiSecret);
    }
}