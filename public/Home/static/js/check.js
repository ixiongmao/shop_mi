/* *
 * 会员余额申请
 */
function submitSurplus()
{
    var frm            = document.forms['formSurplus'];
    var surplus_type   = frm.elements['surplus_type'].value;
    var surplus_amount = frm.elements['amount'].value;
    var process_notic  = frm.elements['user_note'].value;
    var payment_id     = 0;
    var msg = '';

    if (surplus_amount.length == 0 )
    {
        msg += surplus_amount_empty + "\n";
    }
    else
    {
        var reg = /^[\.0-9]+/;
        if ( ! reg.test(surplus_amount))
        {
            msg += surplus_amount_error + '\n';
        }
    }

    if (process_notic.length == 0)
    {
        msg += process_desc + "\n";
    }

    if (msg.length > 0)
    {
        alert(msg);
        return false;
    }

    if (surplus_type == 0)
    {
        for (i = 0; i < frm.elements.length ; i ++)
        {
            if (frm.elements[i].name=="payment_id" && frm.elements[i].checked)
            {
                payment_id = frm.elements[i].value;
                break;
            }
        }

        if (payment_id == 0)
        {
            alert(payment_empty);
            return false;
        }
    }

    return true;
}
