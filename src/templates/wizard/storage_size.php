<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Padidinti serverio resursus</h2>
        <form method="post" action="?controller=wizard&action=selectStorageSize">
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Įveskite norimą serverio talpą</span>
                </div>
                <input type="number" min="1" name="storage_size" class="input input-bordered" />
                <?php if (ErrorBag::has('storage_size')) : ?>
                    <div class="label">
                        <span class="label-text-alt text-error"><?= ErrorBag::get('storage_size') ?></span>
                    </div>
                <?php endif; ?>
            </label>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>