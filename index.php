$url = 'https://www.billplz.com/api/v3/bills';
$data = array(
    "collection-id" => "eils3r4h",
    "description" => "Ni test je boss",
    "email" => "faiz3249@fayempire.com",
    "name" => "Faiz Muhamad",
    "amount" => "100",
    "callback-url" => "fayempire.com",
    "redirect-url" => "fayempire.com",
    "due-at" => "2021-01-21"
    "reference_1_label" => "First Name" 
    "reference_2_label" => "Last Name"
    "reference_1" => "Sara"
    "reference_2" => "Dila"
    "deliver" => "false"
    )
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic ZTBhNGM0MTItMzQ3Yi00MmQ4LThhZTctODQ5NjcyZTExZjUx==));
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
