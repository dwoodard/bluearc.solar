<?php

namespace App\Livewire;

use App\Models\Lead;
use Livewire\Component;
// use Livewire\Attributes\Computed;


class PowerOutage extends Component
{
  public $zip;
  public $own_home;
  public $first_name;
  public $last_name;
  public $email;
  public $phone;
  public $credit_score;
  public $was_refered = false;
  public $avg_electric_bill_monthly  = 400;

  protected $rules = [
    'zip' => 'required|digits:5',
    'own_home' => 'required|boolean',
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|email',
    'phone' => 'required|numeric',
    'was_refered' => 'required|boolean',
    // 'credit_score' => 'required|numeric',
    'avg_electric_bill_monthly' => 'required',
  ];

  public function save()
  {
    $data = $this->validate();

    Lead::updateOrCreate(
      ['email' => $this->email, 'phone' => $this->phone],
      $data
    );




    try {
      //go high level upsert
      $contact = new \App\Http\GHL\Contact();
      $contact->create($data);
      $contact->response();
    } catch (\Exception $e) {


      dd($data);
      dd(json_encode($e->getMessage()));
    }
  }

  public function updated($field)
  {
    $this->validateOnly($field);
  }

  public function render()
  {
    return view('livewire.power-outage');
  }
}
