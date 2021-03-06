import 'bootstrap/js/dist/button';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';
import './components/fontawesome';

import '../scss/common.scss';

let user_card_cfg = {
    command : 'getUserInfo',
    component : 'user_card',
    key : 'username',
    op : (tab)=>{
        let id = $(tab).attr('id');
        return (id.substr(0, id.indexOf('-')));
    }
};
let prod_card_cfg = {
    command : 'getProductInfo',
    component : 'private_card',
    key : 'code',
    op : (tab)=>{
        let id = $(tab).attr('id');
        return (id.substr(0, id.indexOf('-')));
    }
};

export function addCard(entity_obj, target, type='product'){
    let conf;

    switch(type){
        case 'product':
            conf = prod_card_cfg;
            break;
        case 'user':
            conf = user_card_cfg;
            break;
    }

    console.log(`rendering product in ${conf.op($(target))}`);
    entity_obj.tab = conf.op($(target));
    $.ajax({
        contentType : 'text/html',
        data : entity_obj,
        type : 'GET',
        url : `components/${conf.component}.php`
    }).done((response)=>{
        $(target).append(response); // se non funziona urlo
    }).catch((error)=> console.log(error.message));
}

let createCookie = function(name, value, days) {
    let expires;
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
};

export function getCookie(c_name) {
    if (document.cookie.length > 0) {
        let c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            let c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

export var updateCart = () => createCookie('cart', JSON.stringify(cart), false);
export var updateTotal = () =>     $('#total-cart').html(getCookie('cart-total')!==""? getCookie('cart-total') : 0);

export function readURL(input) {

    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            $(input).parent().find('img').attr('src', e.target.result).removeClass('d-none');
        };

        reader.readAsDataURL(input.files[0]);
    }
}


export function addSpinner(btn){
    let icon = btn.find('svg').data('icon');
    let prefix = btn.find('svg').data('prefix');
    btn.data('icon', icon).data('prefix', prefix).find('svg').remove();
    btn.append('<i class="fas fa-circle-notch fa-spin"></i>');
}

export function removeSpinner(btn){
    btn.find('svg').remove();
    let icon = btn.data('icon');
    let prefix = btn.data('prefix');
    if(prefix !== undefined && icon !== undefined)
        btn.append(`<i class="${prefix} fa-${icon}"></i>`);
}