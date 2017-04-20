<tr>
    <td>{{ label }}</td>
    <td>
        {{{ control }}}
        {{#error}}
        <p class="help-inline text-danger text-left">{{ error }}</p>
        {{/error}}
    </td>
</tr>