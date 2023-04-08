class ApiModel {
public function getData() {
// Initialize cURL
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

return $data;
}
}