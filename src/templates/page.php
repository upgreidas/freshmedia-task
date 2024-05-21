<div class="h-screen w-screen flex justify-center items-center bg-neutral-content">
    <div class="max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-4">Paslaugos užsakymas</h1>
        <?php
        switch (Wizard::get('service')) {
            case 'new':
                include 'wizard/new.php';
                break;
            case 'resize':
                include 'wizard/resize.php';
                break;
            default:
                include 'wizard/index.php';
        }
        ?>
    </div>
</div>