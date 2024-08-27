<h2><?= e(trans('backend::lang.account.enter_new_password')) ?></h2>

<?= Form::open() ?>
    <input type="hidden" name="postback" value="1" />
    <input type="hidden" name="id" value="<?= e($id) ?>" />
    <input type="hidden" name="code" value="<?= e($code) ?>" />

    <div class="form-elements" role="form">
        <div class="form-group text-field horizontal-form">

            <!-- Password -->
            <input
                type="password"
                name="password"
                value=""
                class="form-control password icon lock"
                placeholder="<?= e(trans('backend::lang.account.password_placeholder')) ?>"
                autocomplete="off"
                maxlength="255" />

            <!-- Submit Login -->
            <button type="submit" class="btn btn-primary pull-right">
                <?= e(trans('backend::lang.account.reset')) ?>
            </button>
        </div>

        <p class="pull-right forgot-password">
            <a href="<?= Backend::url('backend/auth') ?>" class="text-muted">
                <?= e(trans('backend::lang.form.cancel')) ?>
            </a>
        </p>
    </div>
<?= Form::close() ?>
