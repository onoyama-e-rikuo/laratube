<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;
use Illuminate\Support\Facades\DB;

class SearchJava {

    public static function Search()
    {
        $DEVELOPER_KEY = 'AIzaSyDt5NmoSluF9EVgLpIr42rKMMFF7ynRxNY';
        $client = new Google_Client();
        $client->setDeveloperKey($DEVELOPER_KEY);
        $youtube = new Google_Service_YouTube($client);

        $searchResponse = $youtube->search->listSearch('snippet',
            [
                'q' => 'Java tutorial',
                'type' => 'video',
                'maxResults' => 12,
                'regionCode' => 'JP',
                'publishedAfter' => '2019-01-01T00:00:00Z',
            ]
        );

        $items = $searchResponse->items;
        $videoIds = collect($items)->pluck('id')->pluck('videoId')->toArray();  
        $snippets = collect($items)->pluck('snippet');
        $titles = collect($items)->pluck('snippet')->pluck('title')->toArray();
        $thumbnails = collect($snippets->pluck('thumbnails')->pluck('high')->pluck('url'))->toArray();

        $data = [
            [
            'videoId' => $videoIds[0],
            'title' => $titles[0],
            'thumbnail' => $thumbnails[0],
            ],
            [
            'videoId' => $videoIds[1],
            'title' => $titles[1],
            'thumbnail' => $thumbnails[1],
            ],
            [
            'videoId' => $videoIds[2],
            'title' => $titles[2],
            'thumbnail' => $thumbnails[2],
            ],
            [
            'videoId' => $videoIds[3],
            'title' => $titles[3],
            'thumbnail' => $thumbnails[3],
            ],
            [
            'videoId' => $videoIds[4],
            'title' => $titles[4],
            'thumbnail' => $thumbnails[4],
            ],
            [
            'videoId' => $videoIds[5],
            'title' => $titles[5],
            'thumbnail' => $thumbnails[5],
            ],
            [
            'videoId' => $videoIds[6],
            'title' => $titles[6],
            'thumbnail' => $thumbnails[6],
            ],
            [
            'videoId' => $videoIds[7],
            'title' => $titles[7],
            'thumbnail' => $thumbnails[7],
            ],
            [
            'videoId' => $videoIds[8],
            'title' => $titles[8],
            'thumbnail' => $thumbnails[8],
            ],
            [
            'videoId' => $videoIds[9],
            'title' => $titles[9],
            'thumbnail' => $thumbnails[9],
            ],
            [
            'videoId' => $videoIds[10],
            'title' => $titles[10],
            'thumbnail' => $thumbnails[10],
            ],
            [
            'videoId' => $videoIds[11],
            'title' => $titles[11],
            'thumbnail' => $thumbnails[11],
            ],
        ];
        DB::table('java_results')->insert($data);
    }
}

