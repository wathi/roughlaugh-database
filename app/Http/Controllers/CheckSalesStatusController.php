<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CheckSalesStatusController extends Controller
{

  public function index()
  {
    $groups = [
      'Saito' => [
        'https://talkport.com/publishers/265179/live_detail',
        'https://talkport.com/publishers/265186/live_detail',
        'https://talkport.com/publishers/265198/live_detail',
        'https://talkport.com/publishers/265207/live_detail',
        'https://talkport.com/publishers/265215/live_detail',
        'https://talkport.com/publishers/265223/live_detail'
      ],
      'Sasaki' => [
        'https://talkport.com/publishers/265173/live_detail',
        'https://talkport.com/publishers/265180/live_detail',
        'https://talkport.com/publishers/265192/live_detail',
        'https://talkport.com/publishers/265201/live_detail',
        'https://talkport.com/publishers/265209/live_detail',
        'https://talkport.com/publishers/265217/live_detail'
      ],
      'Takanashi' => [
        'https://talkport.com/publishers/265177/live_detail',
        'https://talkport.com/publishers/265184/live_detail',
        'https://talkport.com/publishers/265196/live_detail',
        'https://talkport.com/publishers/265205/live_detail',
        'https://talkport.com/publishers/265213/live_detail',
        'https://talkport.com/publishers/265221/live_detail'


      ],
      'Nagamatsu' => [
        // '',
        // '',
        'https://talkport.com/publishers/265199/live_detail',
        'https://talkport.com/publishers/265208/live_detail',
        'https://talkport.com/publishers/265216/live_detail',
        'https://talkport.com/publishers/265224/live_detail'
      ],
      'Natsume' => [
        'https://talkport.com/publishers/265176/live_detail',
        'https://talkport.com/publishers/265183/live_detail',
        'https://talkport.com/publishers/265195/live_detail',
        'https://talkport.com/publishers/265204/live_detail',
        'https://talkport.com/publishers/265212/live_detail',
        'https://talkport.com/publishers/265220/live_detail'
      ],
      'Hibino' => [
        'https://talkport.com/publishers/265178/live_detail',
        'https://talkport.com/publishers/265185/live_detail',
        'https://talkport.com/publishers/265197/live_detail',
        'https://talkport.com/publishers/265206/live_detail',
        'https://talkport.com/publishers/265214/live_detail',
        'https://talkport.com/publishers/265222/live_detail'
      ],
      'Fujisaki' => [
        'https://talkport.com/publishers/265175/live_detail',
        'https://talkport.com/publishers/265182/live_detail',
        'https://talkport.com/publishers/265194/live_detail',
        'https://talkport.com/publishers/265203/live_detail',
        'https://talkport.com/publishers/265211/live_detail',
        'https://talkport.com/publishers/265219/live_detail'
      ],
      'Yoshimura' => [
        'https://talkport.com/publishers/265174/live_detail',
        'https://talkport.com/publishers/265181/live_detail',
        'https://talkport.com/publishers/265193/live_detail',
        'https://talkport.com/publishers/265202/live_detail',
        'https://talkport.com/publishers/265210/live_detail',
        'https://talkport.com/publishers/265218/live_detail'
      ],
    ];

    // dd($groups);

    $checkStatus = 'Button--disabled';
    $results = [];

    foreach ($groups as $groupName => $urls) {
      foreach ($urls as $url) {
        $response = Http::get($url);

        if ($response->successful()) {
          $content = $response->body();

          if (strpos($content, $checkStatus) !== false) {
            $results[$groupName][] = 'yes';
          } else {
            $results[$groupName][] = 'no';
          }
        } else {
          $results[$groupName][] = 'error';
        }
      }
    }
    dd($results);
    return view('sales-status', compact('results'));
  }
}
