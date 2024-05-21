<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Ar reikės domeno?</h2>
        <form method="post" action="?controller=wizard&action=addDomain">
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Taip</span>
                    <input type="radio" name="domain" value="1" class="radio radio-accent" checked />
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Ne</span>
                    <input type="radio" name="domain" value="0" class="radio radio-accent" />
                </label>
            </div>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>