<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Likelihood;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Support\Facades\Log;

class ExtractController extends Controller
{
    //


    public function home()
    {
        return view('service');
    }
    public function index()
    {
        return view('extract.extract_text');
    }

    public function submit (Request $request)
    {

        Log::info('Enter in text detection function -- '.print_r($request->all(),1));
		$image = request('image');
		if(isset($image)){
		   	$imagePath = $image->getPathName();
			$fp_image = fopen($imagePath, 'r');
			$image = fread($fp_image, filesize($imagePath));
			fclose($fp_image);

			$client = new RekognitionClient([
				'version'     => 'latest',
				'region'      => config('rekognition.region', 'eu-west-1'),
				'credentials' => [
					'key'    => 'AKIAWRZ47C2L3FCJOI32',
					'secret' => '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'
				]

			]);

			$data = $client->detectText([
				'Image' => array(
					'Bytes' => $image,
				),
			])['TextDetections'];

			$string = '';
			// Make a string of all words which are detected from image
			foreach($data as $item)
			{
				if($item['Type'] === 'WORD')
				{
					$string .= $item['DetectedText'] . ' ';
				}
			}
		}
		return view('extract.extract_text', compact('string'));











        // try
        // {
        //     if($request->file('image')) {

        //         // convert to base64
        //         $imageAnnotatorClient = new ImageAnnotatorClient();

        //         $imageContent = base64_encode(file_get_contents($request->file('image')));

        //         $response = $imageAnnotatorClient->textDetection($imageContent);

        //         $text = $response->getTextAnnotations();

        //         echo $text[0]->getDescription();

        //           if ($error = $response->getError()) {
        //               print('API Error: ' . $error->getMessage() . PHP_EOL);
        //           }

        //         // $client = new ImageAnnotatorClient();
        //         // $client->setImage($image);
        //         // $client->setFeature("TEXT_DETECTION");

        //         // $google_request = new GoogleCloudVision([$client],  env('GOOGLE_CLOUD_KEY'));

        //         // $response = $google_request->annotate();

        //         // dd($response);
        //     }
        // }
        // catch(\Exception $ex)
        // {
        //     dd($ex);
        // }

    }
}
