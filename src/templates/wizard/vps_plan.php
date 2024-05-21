<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Virtualaus serverio planas</h2>
        <form method="post" action="?controller=wizard&action=selectVpsPlan">
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Nereikia</span>
                    <input type="radio" name="vps_plan" value="0" class="radio radio-accent" checked />
                </label>
            </div>
            <?php foreach (CONFIG['vps'] as $id => $plan) : ?>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text"><?= $plan['name'] ?> (<?= currency($plan['price']) ?> mėnesiui)</span>
                        <input type="radio" name="vps_plan" value="<?= $id ?>" class="radio radio-accent" />
                    </label>
                </div>
            <?php endforeach; ?>
            <?php if (ErrorBag::has('vps_plan')) : ?>
                <div class="label">
                    <span class="label-text-alt text-error"><?= ErrorBag::get('vps_plan') ?></span>
                </div>
            <?php endif; ?>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>