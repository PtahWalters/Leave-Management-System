<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\View;

class Holidays extends Component
{
    public function __construct(){
        View::share('newlinktitle', 'Add holiday');
        View::share('newlink', 'create-holiday');
    }

    function initCurl(){
        $ch = curl_init();
        // Create curl header
        $headers = array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Content-Type: application/json',
            'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15'
            );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        return $ch;
    }

    public function getHolidays()
    {
        $key = '6e7c5825168a079a12a10750bd97495c8c51306c';
        $country = 'TZ';
        $year = date('Y');

        $curl = $this->initCurl();
        curl_setopt($curl, CURLOPT_URL, 'https://calendarific.com/api/v2/holidays?api_key='.$key.'&country='.$country.'&year='.$year);
        $holidays = curl_exec($curl);
        
        $holidays = json_decode($holidays);
        return $holidays->response->holidays;
    }

    public function render()
    {
        $data = array (
            'newlinktitle'=>'Add holiday',
            'newlink'=>'create-holiday'
        );

        $holidays = $this->getHolidays();

        return view('livewire.holidays')->with('data', $data)->with('holidays', $holidays);
    }


}
