<?php

class ApiModel {
    public function getData2($cusomterBirthDate)
    {
       
    }
    public function getData($cusomterBirthDate) {
        $curl = curl_init();
        $timestamp = strtotime($cusomterBirthDate);
        $year = date('Y', $timestamp);
        $month = date('m', $timestamp);
        $day = date('d', $timestamp);
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=".$month."&day=".$day,
            CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_FOLLOWLOCATION => true,
	        CURLOPT_ENCODING => "",
	        CURLOPT_MAXREDIRS => 10,
	        CURLOPT_TIMEOUT => 30,
	        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	        CURLOPT_CUSTOMREQUEST => "GET",
	        CURLOPT_HTTPHEADER => [
		        "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		        "X-RapidAPI-Key: aba4af5854msh043a5eafd9abcf1p1a5138jsna3effcf9e6fa"
	        ],
]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;
            echo '<br>';
            $data = json_decode($response, true);
            return $data;
        }


    /*// Initialize cURL
    $curl = curl_init();
    // Set the URL and other options
    curl_setopt($curl, CURLOPT_URL, "https://api.example.com/data");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($curl);

    // Close cURL
    curl_close($curl);

    // Process the response
    $data = json_decode($response, true);

    return $data;*/
    }
    public function getActorDetails($actor)
    {
        $curl = curl_init();
        $nm = substr($actor, 6, -1);
        curl_setopt_array($curl, [
	        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=".$nm,
	        CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_FOLLOWLOCATION => true,
	        CURLOPT_ENCODING => "",
	        CURLOPT_MAXREDIRS => 10,
	        CURLOPT_TIMEOUT => 30,
	        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	        CURLOPT_CUSTOMREQUEST => "GET",
	        CURLOPT_HTTPHEADER => [
		        "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		        "X-RapidAPI-Key: aba4af5854msh043a5eafd9abcf1p1a5138jsna3effcf9e6fa"
	        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
	        echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);
	        return $data;
        }
    }
}
?>