<?php
require_once dirname(__FILE__)."/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/");
$dotenv->load();
// $dotenv->required(['ACCESS_TOKEN'])->notEmpty();

// $shortUrl = '';


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // URL to the Unelma.IO API
  $url = 'https://unelma.io/api/v1/link';
  // Access token for the Unelma.IO API
  $access_Token = $_ENV['ACCESS_TOKEN'];

// Collect the long URL from the form input
$longUrl = $_POST['longUrl'];

// Prepare the data to be sent in the POST request
$data = [
"type" => "direct",
"password" => null,
"active" => true,
"expires_at" => "2024-07-07",
"activates_at" => "2024-04-25",
"utm" => "utm_source=google&utm_medium=banner",
"domain_id" => null,
"long_url" => $longUrl
];

// Initialize cURL session
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
'accept: application/json',
'Content-Type: application/json',
'Authorization: Bearer ' . $access_Token,
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the POST request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
  } else {
  // Decode the response
  $responseDecoded = json_decode($response, true);
  // Check if the 'link' key and 'short_url' subkey exist before trying to access it
  if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
  // Output the shortened URL
  echo 'Shortened URL: <a href="' . $responseDecoded['link']['short_url'] . '">' . $responseDecoded['link']['short_url'] . '</a>';
  } else {
  // Handle the case where 'short_url' key doesn't exist
  echo 'The key "short_url" does not exist in the response.';
  }
  }

// Close cURL session
curl_close($ch);

// If there was an error, display it
/* if (isset($error_msg)) {
  echo "Error: " . $error_msg;
  } else {
  // Decode the response
  $responseDecoded = json_decode($response, true);
  // Convert the PHP array back into a JSON string
  $jsonResponse = json_encode($responseDecoded, JSON_PRETTY_PRINT);
  // Display the JSON string
  echo "<pre>" . $jsonResponse . "</pre>";
  }
  */
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>URL Shortener</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2>Unelma.io url shortener</h2>

        <form method="post" class="p-3 m-0 border-0 bd-example m-0 border-0">
            <label for="longUrl" class="mb-3">Enter URL to shorten:</label>
            <input type="text" id="longUrl" name="longUrl" required><br>
            <button type="submit" class="btn btn-primary">Shorten URL</button>
        </form>
    
</body>

</html>