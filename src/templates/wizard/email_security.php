<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">El. pašto apsauga</h2>
        <form method="post" action="?controller=wizard&action=addEmailSecurity">
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Reikia</span>
                    <input type="radio" name="email_security" value="1" class="radio radio-accent" checked />
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Nereikia</span>
                    <input type="radio" name="email_security" value="0" class="radio radio-accent" />
                </label>
            </div>
            <div class="card-actions justify-end mt-4">
                <button class="btn btn-primary">Tęsti</button>
            </div>
        </form>
    </div>
</div>