<?php
$services = [
    [
        'name' => 'Serverio resursai (GB)',
        'value' => Wizard::get('storage_size', 0) . ' GB',
        'price' => Wizard::get('storage_size', 0) * CONFIG['storage']['price'] * 12,
    ],
    [
        'name' => 'El. pašto apsauga',
        'value' => Wizard::get('email_security') ? 'Taip' : 'Ne',
        'price' => Wizard::get('email_security') ? CONFIG['email_security']['price'] * 12 : 0,
    ],
    [
        'name' => 'Domeno registracija',
        'value' => Wizard::get('need_domain') ? 'Taip' : 'Ne',
        'price' => Wizard::get('need_domain') ? CONFIG['domain_registration']['price'] : 0,
    ],
    [
        'name' => 'VPS planas',
        'value' => CONFIG['vps'][Wizard::get('vps_plan')]['name'] ?? 'Ne',
        'price' => (CONFIG['vps'][Wizard::get('vps_plan')]['price'] ?? 0) * 12,
    ],
];

$total = array_sum(array_column($services, 'price'));
?>

<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Sąmata</h2>
        <table class="table">
            <tbody>
                <?php foreach ($services as $service) : ?>
                    <tr>
                        <td>
                            <?= $service['name'] ?>
                        </td>
                        <td>
                            <?= $service['value'] ?>
                        </td>
                        <td class="text-right">
                            <?= currency($service['price']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2" class="text-lg">
                        Viso:
                    </th>
                    <th class="text-right text-lg">
                        <?= currency($total) ?>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>