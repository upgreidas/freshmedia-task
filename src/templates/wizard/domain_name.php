<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Domeno vardas</h2>
        <form method="post" action="?controller=wizard&action=selectDomain">
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Įveskite norimą domeną</span>
                </div>
                <input type="text" name="domain_name" class="input input-bordered" />
                <?php if (ErrorBag::has('domain_name')) : ?>
                    <div class="label">
                        <span class="label-text-alt text-error"><?= ErrorBag::get('domain_name') ?></span>
                    </div>
                <?php endif; ?>
            </label>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>