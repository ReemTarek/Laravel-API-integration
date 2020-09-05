<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstagramController extends Controller
{
    //get image from public profile instagram
    public function getInstagramPublicFeed($request)
    {//dd($request);
        $instagram = new \InstagramScraper\Instagram();
        $nonPrivateAccountMedias = $instagram->getMedias($request);
       // dd($nonPrivateAccountMedias);
       // echo $nonPrivateAccountMedias[0]->getImageHighResolutionUrl();
        $imageCounts = 0;
        $links=null;
        foreach ($nonPrivateAccountMedias as $account){
         $links[$imageCounts] = $account->getImageThumbnailUrl();
          $imageCounts++;
          if($imageCounts==5)break;
         }
       return view('home')->with('imageLinks',$links);
        
    }
}
