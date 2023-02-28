<?php
require_once __DIR__ . '/../vendor/autoload.php';
    use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
class HomeController
{

    public function index()
    {
    
        if (isset($_POST['generate'])){
            $dataUri = $this->generateQR();
        }        
       
        require __DIR__ . '/../views/home/index.php';
    }

    private function generateQR(){
        $writer = new PngWriter();

        $url = $_POST['url'];

        // Create QR code
        $qrCode = QrCode::create($url)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create(__DIR__.'/assets/symfony.png')
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('Label')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, null, $label);

        // Validate the result
        //$writer->validateResult($result, 'Life is too short to be generating QR codes');
       return $result->getDataUri();
    }

    public function about()
    {
        require __DIR__ . '/../views/home/about.php';
    }
}