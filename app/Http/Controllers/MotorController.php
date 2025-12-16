<?php

namespace App\Http\Controllers;

use App\Models\HelpSupport;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class MotorController extends Controller
{
    public function pushMotorSingle(Request $request)
    {
        try {
            $inputDatac = json_encode($request->all());
            // $inputData = $request->all()['data'];
            $inputData = '
            {
  "data": {
  "branchCode": "CORO123456",
  "productCode": "COMP-2025",
  "riskTypeCode": "PRIVATE_INDIVIDUAL_X1",
  "intermediaryCode": "INT-BROKER-007",
  "subintermediaryCode": "SUB-INT-015",
   "companyAssignedPolicyNumber": "POL-2025-001234",
  "vehicleData": {
  "registrationNumber": "GH-4567-22",
  "chassisNumber": "JN1TANT31U0012345",
  "make": "TOYOTA",
  "model": "CAMRY",
  "manufacturingYear": 2022,
  "registrationYear": 2022,
  "vehicleColour": "Black",
  "bodyType": "Sedan",
  "seatingCapacity": 5,
  "grossWeight": 1600,
  "cubicCapacity": 2500,
  "vehicleUsage": "PRIVATE",
  "vehicleMileage": 12000,
  "fuelType": "Petrol",
  "vehicleValue": 150000.00,
  "verified": true
  },
  "customerData": {
  "isActive": true,
  "type": "NATURAL",
  "ghanaCardNumber": "GHA-123456789-0",
  "firstName": "Kwame",
  "otherNames": "Kofi",
  "lastName": "Mensah",
  "title": "Mr.",
  "dateOfBirth": "1985-06-15",
  "gender": "MALE",
  "nationality": "Ghanaian",
  "levelOfEducation": "University Degree",
  "maritalStatus": "Married",
  "email": "kwame.mensah@example.com",
  "phoneNumber": "0508872736",
  "digitalAddress": "GA-123-4567",
  "residentialAddress": "House No. 45, North Legon, Accra",
  "occupation": "Software Engineer"
  },
  "policyData": {
  "startDate": "2028-01-01",
  "expiryDate": "2028-12-31",
  "sumInsured": 150000.00,
  "grossPremium": 4500.00,
  "type": "NEW_BUSINESS",
  "transactionDate": "2024-12-20",
  "excessBought": true,
  "extraTppdl": 10000.00,
  "umbrellaLimit": 200000.00,
  "noClaimDiscount": 15.0,
  "earnedNoClaimDiscount": 15.0,
 
  "calculationType": "FULL_YEAR"
  }
  }
}
            ';

            // Initialize cURL
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://middevapi.nic.gov.gh/api/public-api/individual/policies',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                // Encode Laravel request data into JSON
                CURLOPT_POSTFIELDS => ($inputData),
                CURLOPT_HTTPHEADER => [
                    'Authorization:x-api-key mis_live_cmp_20_9587226e.3ngt8k2ei1ilE0ICiuIPa_twkTCPLg9q',
                    'Content-Type: application/json',
                ],
            ]);

            // Execute request
            $response = curl_exec($curl);

            // Handle errors
            if (curl_errno($curl)) {
                $error_msg = curl_error($curl);
                curl_close($curl);
                return response()->json(['error1' => $error_msg], 500);
            }

            curl_close($curl);

            // Decode API response if JSON
            $decodedResponse = json_decode($response, true);

            return response()->json([
                'success' => true,
                'api_response' => $decodedResponse ?? $response
            ]);
        } catch (\Throwable $th) {
            return json_decode($th->getMessage());
        }
    }




    public function payment()
    {
        // generate random number
        $randomNumber = rand(100000, 999999);
        try {
            // 2023339
            // 2021176
            $url = 'https://payproxyapi.hubtel.com/items/initiate';
            $jsonData = [
                "totalAmount" => 0.1,
                "description" => "Book Shop Checkout",
                "callbackUrl" => "https://webhook.site/4aed2092-005a-4d7b-80e9-1b7500196585", // change this to the callback url
                "returnUrl" => "http://hubtel.com/online",
                "merchantAccountNumber" => "2023339",
                "cancellationUrl" => "http://hubtel.com/online",
                "clientReference" =>  'inv' . $randomNumber
            ];

            $data = json_encode($jsonData);
            $username = 'QNX0w4Z';
            $password = 'b429eed87f884bd18e3f1ca12fff4330';


            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password")
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Attach JSON data


            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


            if (curl_errno($ch)) {
                return response()->json(['error' => 'cURL Error: ' . curl_error($ch)], 500);
            }

            curl_close($ch);


            if ($httpCode < 200 || $httpCode >= 300) {
                return response()->json([
                    'error' => 'HTTP Error: ' . $httpCode,
                    'response' => json_decode($response)
                ], $httpCode);
            }


            return response()->json(json_decode($response), 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Internal Server Error: ' . $th->getMessage()], 500);
        }
    }

    public function pushingP(Request $request)
    {
        $inputData = json_encode($request->all());
        // $inputData = $request->all()['data'];

        // Initialize cURL
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'Base url: https://middevapi.nic.gov.gh/api',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            // Encode Laravel request data into JSON
            CURLOPT_POSTFIELDS => json_encode($inputData),
            CURLOPT_HTTPHEADER => [
                'Authorization: x-api-key mis_live_cmp_20_9587226e.3ngt8k2ei1ilE0ICiuIPa_twkTCPLg9q',
                'Content-Type: application/json',
            ],
        ]);

        // Execute request
        $response = curl_exec($curl);

        // Handle errors
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            curl_close($curl);
            return response()->json(['error' => $error_msg], 500);
        }

        curl_close($curl);

        // Decode API response if JSON
        $decodedResponse = json_decode($response, true);

        return response()->json([
            'success' => 'xxxx',
            'api_response' => $decodedResponse ?? $response
        ]);
    }
}
