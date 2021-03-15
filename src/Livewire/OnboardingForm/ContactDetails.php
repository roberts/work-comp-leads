<?php

namespace Roberts\WorkCompLeads\Livewire\OnboardingForm;

use Roberts\WorkCompLeads\Enums\OnboardingFormStep;

class ContactDetails extends OnboardingFormStepComponent
{
    protected $rules = [
        'attributes.first_name' => 'required',
        'attributes.last_name' => 'required',
        'attributes.position' => 'required',
        'attributes.phone_number' => 'required',
    ];

    protected $validationAttributes = [];

    public function render()
    {
        return view('sl::livewire.onboarding-form.contact-details');
    }

    public function processLead(array $data)
    {
        $this->lead->update($data);

        return $this->lead;
    }

    public function getNextStep()
    {
        return OnboardingFormStep::MAILING_ADDRESS;
    }
}
