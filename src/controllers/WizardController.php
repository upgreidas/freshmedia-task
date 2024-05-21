<?php

class WizardController
{
    public function resetWizard()
    {
        Wizard::reset();

        redirect('/');
    }

    public function selectService()
    {
        $selectedService = $_POST['service'] ?? '';

        $availableServices = ['new', 'resize'];

        if (!in_array($selectedService, $availableServices)) {
            return redirect('/');
        }

        $nextStep = [
            'new' => 'add_domain',
            'resize' => 'storage_size',
        ][$selectedService];

        Wizard::set('service', $selectedService);
        Wizard::set('current_step', $nextStep);

        redirect('/');
    }

    public function addDomain()
    {
        $needDomain = filter_var($_POST['domain'] ?? 0, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? false;

        Wizard::set('need_domain', $needDomain);
        Wizard::set('current_step', $needDomain ? 'domain_name' : 'vps_plan');

        redirect('/');
    }

    public function selectDomain()
    {
        $domainName = filter_var($_POST['domain_name'] ?? '', FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME);

        if ($domainName === false) {
            ErrorBag::set('domain_name', 'Neteisingas domeno formatas.');

            return redirect('/');
        }

        Wizard::set('domain_name', $domainName);
        Wizard::set('current_step', 'vps_plan');

        redirect('/');
    }

    public function selectVpsPlan()
    {
        $selectedPlan = $_POST['vps_plan'] ?? '0';
        $availablePlans = array_keys(CONFIG['vps']);

        if ($selectedPlan !== '0' && !in_array($selectedPlan, $availablePlans)) {
            ErrorBag::set('vps_plan', 'Nėra tokio plano.');

            return redirect('/');
        }

        Wizard::set('vps_plan', $selectedPlan);
        Wizard::set('current_step', 'email_security');

        redirect('/');
    }

    public function addEmailSecurity()
    {
        $emailSecurity = filter_var($_POST['email_security'] ?? 0, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? false;

        Wizard::set('email_security', $emailSecurity);
        Wizard::set('current_step', 'results');

        redirect('/');
    }

    public function selectStorageSize()
    {
        $storageSize = filter_var($_POST['storage_size'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);

        if ($storageSize === false) {
            ErrorBag::set('storage_size', 'Nauja serverio talpa turi būti sveikas skaičius ne mažesnis nei 1.');

            return redirect('/');
        }

        Wizard::set('storage_size', $storageSize);
        Wizard::set('current_step', 'results');

        redirect('/');
    }
}
