<?php

namespace App\Http\Controllers;

use App\Models\HelpSupport;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        return view('front.help');
    }
    public function main()
    {
        return view('back.help.main');
    }
    public function list()
    {
        return view('back.help.list');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'section' => 'required',
            'body' => 'required',
            'city' => 'nullable|max:255',
            'state' => 'nullable|max:255',
            'zip' => 'nullable|max:10'
        ]);

        HelpSupport::create($validated);
        return response()->json(['success' => 'Help and support article created successfully.']);
    }

    public function createForm()
    {
        return view('back.help.form');
    }
    ///
    public function supportList()
    {
        return view('back.help.list');
    }


    public function supportRequets()
    {
        return view('back.help.requests');
    }
    public function supportInbox()
    {
        return view('back.help.inbox');
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
}
