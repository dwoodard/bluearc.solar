<?php

namespace App\Livewire;

use Livewire\Component;

class SolarLandingPage extends Component
{

  public $name = "TEST";
  public $email = "";
  public $phone = "";
  public $zip = "";
  public $credit_score = "";
  public $electric_bill = "";
  public $do_you_own_home = "";



  public function mount()
  {
    $this->name = "something";
  }



  public function save()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'zip' => 'required|numeric|digits:5',
      'credit_score' => 'required',
      'electric_bill' => 'required',
      'do_you_own_home' => 'required',
    ]);

    // Save to database
    $lead = Lead::create([
      'name' => $this->name,
      'email' => $this->email,
      'phone' => $this->phone,
      'zip' => $this->zip,
      'credit_score' => $this->credit_score,
      'electric_bill' => $this->electric_bill,
      'do_you_own_home' => $this->do_you_own_home,
    ]);

    return redirect()->route('thank-you');
  }


  public function render()
  {
    return view('livewire.solar-landing-page');
  }
}
