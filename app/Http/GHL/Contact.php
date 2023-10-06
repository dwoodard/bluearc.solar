<?php

namespace App\Http\GHL;


class Contact
{
  private $token;
  private $location;
  private $base_url;
  private $response;

  public function __construct()
  {
    $this->token = env('GHL_API_TOKEN');
    $this->location = env('GHL_LOCATION_ID');
    $this->base_url = 'https://rest.gohighlevel.com/v1/contacts/';
  }

  //Create a contact
  // https://rest.gohighlevel.com/v1/contacts/ 
  public function create($data)
  {

    // map $data to the fields in the GHL API
    $data = [
      'firstName' => $data['first_name'],
      'lastName' => $data['last_name'],
      'email' => $data['email'],
      'phone' => $data['phone'],
      'postalCode' => $data['zip'],

      "customFields" => [
        [
          "name" => "credit_score",
          "value" => $data['credit_score'] ?? null
        ],
        [
          "name" => "was_refered",
          "value" => $data['was_refered'] ?? null
        ],
        [
          "name" => "avg_electric_bill_monthly",
          "value" => $data['avg_electric_bill_monthly'] ?? null
        ],
        [
          "name" => "own_home",
          "value" => $data['own_home'] ?? null
        ]
      ]
    ];

    $client = new \GuzzleHttp\Client();

    $body = [
      "locationId"  => $this->location,
      ...$data
    ];

    $header = [
      'Authorization' => 'Bearer ' . $this->token,
      'Content-Type' => 'application/json',
      'Version' => '2021-07-28',
    ];

    $contact = [
      'body' => json_encode($body),
      'headers' => $header
    ];

    $response = $client->request('POST', $this->base_url, $contact);
    $this->response = $response->getBody();
  }





  //upsert
  public function upsert($data)
  {

    // map $data to the fields in the GHL API
    $data = [
      'firstName' => $data['first_name'],
      'lastName' => $data['last_name'],
      'email' => $data['email'],
      'phone' => $data['phone'],
      'postalCode' => $data['zip'],

      "customFields" => [
        // [
        //   "name" => "credit_score",
        //   "value" => $data['credit_score']
        // ],
        [
          "name" => "was_refered",
          "value" => $data['was_refered']
        ],
        [
          "name" => "avg_electric_bill_monthly",
          "value" => $data['avg_electric_bill_monthly']
        ],
        [
          "name" => "own_home",
          "value" => $data['own_home']
        ]
      ]
    ];

    $client = new \GuzzleHttp\Client();

    $body = [
      "locationId"  => $this->location,
      ...$data
    ];

    $header = [
      'Accept' => 'application/json',
      'Authorization' => 'Bearer ' . $this->token,
      'Content-Type' => 'application/json'
    ];

    $contact = [
      'body' => json_encode($body),
      'headers' => $header
    ];

    $response = $client->request('POST', $this->base_url . 'upsert', $contact);
    $this->response = $response->getBody();
  }

  //response
  public function response()
  {
    return $this->response;
  }
}
