<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Pasirinkite paslaugą</h2>
        <form method="post" action="?controller=wizard&action=selectService">
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Nauja paslauga</span>
                    <input type="radio" name="service" value="new" class="radio radio-accent" checked />
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Padidinti serverio resursus</span>
                    <input type="radio" name="service" value="resize" class="radio radio-accent" />
                </label>
            </div>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>