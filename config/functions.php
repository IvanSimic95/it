<?php


if(isset($_SERVER['HTTP_USER_AGENT'])){
$userAgent = $_SERVER['HTTP_USER_AGENT'];
}else{
$userAgent = "NotSet";
}

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $userip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $userip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $userip = $_SERVER['REMOTE_ADDR'];
}

if (!isset($_SESSION['PixelDATA'])) {
  $_SESSION['PixelDATA'] = 0;
}


//Save to order log function
function formLog($array)
{
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/order.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}

//Save to order log function
function formLogNew($array)
{
  $dataToLog = $array;
  $data = json_encode($dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/test.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}

function formLogNewAgain($array)
{
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/paid.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}

//Save to order log function
function startLog($array)
{
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/start.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}

//Save to order log function
function abandonLog($array)
{
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/abandon.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}

//Save to order log function
function missingLog($array)
{
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . "/logs/missing.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE) {
    echo "log saved";
  }
}



//Find First and Last name
function splitNames($name)
{
  $apiKey = 'Whc29bSnvP3zrQG3hYCwXKMoYu5h4ZQukS6n'; //Your API Key
  $getNames = json_decode(file_get_contents('https://gender-api.com/get?key=' . $apiKey . '&split=' . urlencode($name)));
  $data = [[
    "fname" => $getNames->first_name,
    "lname"  => $getNames->last_name
  ]];
  return $data;
}

//Find User Gender
function findGender($name)
{
  $apiKey = 'Whc29bSnvP3zrQG3hYCwXKMoYu5h4ZQukS6n'; //Your API Key
  $getGender = json_decode(file_get_contents('https://gender-api.com/get?key=' . $apiKey . '&name=' . urlencode($name)));
  $data = [[
    "gender" => $getGender->gender,
    "accuracy"  => $getGender->accuracy
  ]];
  return $data;
}


function escapeJsonString($value)
{
  $escapers =     array("\\",     "/",   "\"",  "\n",  "\r",  "\t", "\x08", "\x0c");
  $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t",  "\\f",  "\\b");
  $result = str_replace($escapers, $replacements, $value);
  return $result;
}



function normalizeChars($s)
{
  $replace = array(
    'ъ' => '-', 'Ь' => '-', 'Ъ' => '-', 'ь' => '-',
    'Ă' => 'A', 'Ą' => 'A', 'À' => 'A', 'Ã' => 'A', 'Á' => 'A', 'Æ' => 'A', 'Â' => 'A', 'Å' => 'A', 'Ä' => 'Ae',
    'Þ' => 'B',
    'Ć' => 'C', 'ץ' => 'C', 'Ç' => 'C',
    'È' => 'E', 'Ę' => 'E', 'É' => 'E', 'Ë' => 'E', 'Ê' => 'E',
    'Ğ' => 'G',
    'İ' => 'I', 'Ï' => 'I', 'Î' => 'I', 'Í' => 'I', 'Ì' => 'I',
    'Ł' => 'L',
    'Ñ' => 'N', 'Ń' => 'N',
    'Ø' => 'O', 'Ó' => 'O', 'Ò' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'Oe',
    'Ş' => 'S', 'Ś' => 'S', 'Ș' => 'S', 'Š' => 'S',
    'Ț' => 'T',
    'Ù' => 'U', 'Û' => 'U', 'Ú' => 'U', 'Ü' => 'Ue',
    'Ý' => 'Y',
    'Ź' => 'Z', 'Ž' => 'Z', 'Ż' => 'Z',
    'â' => 'a', 'ǎ' => 'a', 'ą' => 'a', 'á' => 'a', 'ă' => 'a', 'ã' => 'a', 'Ǎ' => 'a', 'а' => 'a', 'А' => 'a', 'å' => 'a', 'à' => 'a', 'א' => 'a', 'Ǻ' => 'a', 'Ā' => 'a', 'ǻ' => 'a', 'ā' => 'a', 'ä' => 'ae', 'æ' => 'ae', 'Ǽ' => 'ae', 'ǽ' => 'ae',
    'б' => 'b', 'ב' => 'b', 'Б' => 'b', 'þ' => 'b',
    'ĉ' => 'c', 'Ĉ' => 'c', 'Ċ' => 'c', 'ć' => 'c', 'ç' => 'c', 'ц' => 'c', 'צ' => 'c', 'ċ' => 'c', 'Ц' => 'c', 'Č' => 'c', 'č' => 'c', 'Ч' => 'ch', 'ч' => 'ch',
    'ד' => 'd', 'ď' => 'd', 'Đ' => 'd', 'Ď' => 'd', 'đ' => 'd', 'д' => 'd', 'Д' => 'D', 'ð' => 'd',
    'є' => 'e', 'ע' => 'e', 'е' => 'e', 'Е' => 'e', 'Ə' => 'e', 'ę' => 'e', 'ĕ' => 'e', 'ē' => 'e', 'Ē' => 'e', 'Ė' => 'e', 'ė' => 'e', 'ě' => 'e', 'Ě' => 'e', 'Є' => 'e', 'Ĕ' => 'e', 'ê' => 'e', 'ə' => 'e', 'è' => 'e', 'ë' => 'e', 'é' => 'e',
    'ф' => 'f', 'ƒ' => 'f', 'Ф' => 'f',
    'ġ' => 'g', 'Ģ' => 'g', 'Ġ' => 'g', 'Ĝ' => 'g', 'Г' => 'g', 'г' => 'g', 'ĝ' => 'g', 'ğ' => 'g', 'ג' => 'g', 'Ґ' => 'g', 'ґ' => 'g', 'ģ' => 'g',
    'ח' => 'h', 'ħ' => 'h', 'Х' => 'h', 'Ħ' => 'h', 'Ĥ' => 'h', 'ĥ' => 'h', 'х' => 'h', 'ה' => 'h',
    'î' => 'i', 'ï' => 'i', 'í' => 'i', 'ì' => 'i', 'į' => 'i', 'ĭ' => 'i', 'ı' => 'i', 'Ĭ' => 'i', 'И' => 'i', 'ĩ' => 'i', 'ǐ' => 'i', 'Ĩ' => 'i', 'Ǐ' => 'i', 'и' => 'i', 'Į' => 'i', 'י' => 'i', 'Ї' => 'i', 'Ī' => 'i', 'І' => 'i', 'ї' => 'i', 'і' => 'i', 'ī' => 'i', 'ĳ' => 'ij', 'Ĳ' => 'ij',
    'й' => 'j', 'Й' => 'j', 'Ĵ' => 'j', 'ĵ' => 'j', 'я' => 'ja', 'Я' => 'ja', 'Э' => 'je', 'э' => 'je', 'ё' => 'jo', 'Ё' => 'jo', 'ю' => 'ju', 'Ю' => 'ju',
    'ĸ' => 'k', 'כ' => 'k', 'Ķ' => 'k', 'К' => 'k', 'к' => 'k', 'ķ' => 'k', 'ך' => 'k',
    'Ŀ' => 'l', 'ŀ' => 'l', 'Л' => 'l', 'ł' => 'l', 'ļ' => 'l', 'ĺ' => 'l', 'Ĺ' => 'l', 'Ļ' => 'l', 'л' => 'l', 'Ľ' => 'l', 'ľ' => 'l', 'ל' => 'l',
    'מ' => 'm', 'М' => 'm', 'ם' => 'm', 'м' => 'm',
    'ñ' => 'n', 'н' => 'n', 'Ņ' => 'n', 'ן' => 'n', 'ŋ' => 'n', 'נ' => 'n', 'Н' => 'n', 'ń' => 'n', 'Ŋ' => 'n', 'ņ' => 'n', 'ŉ' => 'n', 'Ň' => 'n', 'ň' => 'n',
    'о' => 'o', 'О' => 'o', 'ő' => 'o', 'õ' => 'o', 'ô' => 'o', 'Ő' => 'o', 'ŏ' => 'o', 'Ŏ' => 'o', 'Ō' => 'o', 'ō' => 'o', 'ø' => 'o', 'ǿ' => 'o', 'ǒ' => 'o', 'ò' => 'o', 'Ǿ' => 'o', 'Ǒ' => 'o', 'ơ' => 'o', 'ó' => 'o', 'Ơ' => 'o', 'œ' => 'oe', 'Œ' => 'oe', 'ö' => 'oe',
    'פ' => 'p', 'ף' => 'p', 'п' => 'p', 'П' => 'p',
    'ק' => 'q',
    'ŕ' => 'r', 'ř' => 'r', 'Ř' => 'r', 'ŗ' => 'r', 'Ŗ' => 'r', 'ר' => 'r', 'Ŕ' => 'r', 'Р' => 'r', 'р' => 'r',
    'ș' => 's', 'с' => 's', 'Ŝ' => 's', 'š' => 's', 'ś' => 's', 'ס' => 's', 'ş' => 's', 'С' => 's', 'ŝ' => 's', 'Щ' => 'sch', 'щ' => 'sch', 'ш' => 'sh', 'Ш' => 'sh', 'ß' => 'ss',
    'т' => 't', 'ט' => 't', 'ŧ' => 't', 'ת' => 't', 'ť' => 't', 'ţ' => 't', 'Ţ' => 't', 'Т' => 't', 'ț' => 't', 'Ŧ' => 't', 'Ť' => 't', '™' => 'tm',
    'ū' => 'u', 'у' => 'u', 'Ũ' => 'u', 'ũ' => 'u', 'Ư' => 'u', 'ư' => 'u', 'Ū' => 'u', 'Ǔ' => 'u', 'ų' => 'u', 'Ų' => 'u', 'ŭ' => 'u', 'Ŭ' => 'u', 'Ů' => 'u', 'ů' => 'u', 'ű' => 'u', 'Ű' => 'u', 'Ǖ' => 'u', 'ǔ' => 'u', 'Ǜ' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'У' => 'u', 'ǚ' => 'u', 'ǜ' => 'u', 'Ǚ' => 'u', 'Ǘ' => 'u', 'ǖ' => 'u', 'ǘ' => 'u', 'ü' => 'ue',
    'в' => 'v', 'ו' => 'v', 'В' => 'v',
    'ש' => 'w', 'ŵ' => 'w', 'Ŵ' => 'w',
    'ы' => 'y', 'ŷ' => 'y', 'ý' => 'y', 'ÿ' => 'y', 'Ÿ' => 'y', 'Ŷ' => 'y',
    'Ы' => 'y', 'ž' => 'z', 'З' => 'z', 'з' => 'z', 'ź' => 'z', 'ז' => 'z', 'ż' => 'z', 'ſ' => 'z', 'Ж' => 'zh', 'ж' => 'zh'
  );
  return strtr($s, $replace);
}

//START Database Configuration
$domain = $_SERVER['HTTP_HOST'];
if ($domain == "it.test") {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "it";
  $base_url = "https://it.test";
} else {
  $servername = "localhost";
  $username = "soulmat1_user";
  $password = ";w[#i&[zcrm?";
  $dbname = "soulmat1_db";
  $base_url = "https://soulmatehealer.com";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query('set character_set_client=utf8');
$conn->query('set character_set_connection=utf8');
$conn->query('set character_set_results=utf8');
$conn->query('set character_set_server=utf8');
$conn->set_charset('utf8mb4');

// Check connection
if ($conn->connect_error) {
  die("Website is currently unavailable, we are aware of the issue and are working on it. Please come back later.");
}
//END Database Configuration



if (isset($_GET['utm_campaign'])) {
  $fbTrack = 1;

  $fbVariable = $_GET['utm_campaign'];
  $ex = explode(" ", $fbVariable);

  $fbCampaign = $ex["0"];
  $fbAdset = $ex["1"];
  $fbAd = $ex["2"];

  //Set fb ads session variables
  $_SESSION['fbCampaign'] = $fbCampaign;
  $_SESSION['fbAdset'] = $fbAdset;
  $_SESSION['fbAd'] = $fbAd;
} else {
  $fbTrack = 0;

  $fbCampaign = "";
  $fbAdset = "";
  $fbAd = "";

  if (!isset($_SESSION['fbCampaign'])) {
    $_SESSION['fbCampaign'] = $fbCampaign;
  }

  if (!isset($_SESSION['fbAdset'])) {
    $_SESSION['fbAdset'] = $fbAdset;
  }

  if (!isset($_SESSION['fbAd'])) {
    $_SESSION['fbAd'] = $fbAd;
  }
}


if (isset($_GET['utm_source'])) {
  $_SESSION['fbSource'] = $_GET['utm_source'];
} else {
  $fbSource = "R";
  if (!isset($_SESSION['fbSource'])) {
    $_SESSION['fbSource'] = $fbSource;
  }
}


  $FBPixel = $FBPixel1;

function autologin($userID)
{
  //START Database Configuration
  $domain = $_SERVER['HTTP_HOST'];
  if ($domain == "healer.test") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healer";
    $base_url = "https://healer.test";
  } else {
    $servername = "localhost";
    $username = "soulmat1_user";
    $password = ";w[#i&[zcrm?";
    $dbname = "soulmat1_db";
    $base_url = "https://soulmatehealer.com";
  }
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql2 = "SELECT * FROM users WHERE id = '" . $userID . "'";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();

  $row5 = mysqli_num_rows($result2);
  if ($row5 > 0) {

    // set username in the session
    $_SESSION['login_email'] = $row2['email'];
    $_SESSION['login_id']  = $row2['id'];


    return true;
  }

  return false;
}


function logout()
{

  unset($_SESSION['login_email']);
  unset($_SESSION['login_id']);
  session_destroy();
}


function monthName($month)
{
  switch ($month) {
    case '1':
      $name = "January";
      break;
    case '2':
      $name = "February";
      break;
    case '3':
      $name = "March";
      break;
    case '4':
      $name = "April";
      break;
    case '5':
      $name = "May";
      break;
    case '6':
      $name = "June";
      break;
    case '7':
      $name = "July";
      break;
    case '8':
      $name = "August";
      break;
    case '9':
      $name = "September";
      break;
    case '10':
      $name = "October";
      break;
    case '11':
      $name = "November";
      break;
    case '12':
      $name = "December";
      break;


    default:
      $name = "January";
      break;
  }
  return $name;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/sendgrid/sendgrid-php.php';

?>