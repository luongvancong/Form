<div class="form-group {{#error}}has-error{{/error}}">
    <label class="control-label col-sm-3">{{ label }}</label>
    <div class="col-sm-6">
        {{{ control }}}
        {{#error}}
        <p class="help-inline text-danger text-left">{{ error }}</p>
        {{/error}}
    </div>
</div>