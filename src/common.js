export let username = document.cookie.match(/user=([a-zA-Z0-9]+)/)[1]; // fa schifo sto coso...
export let cart;

initCart();

export function addCard(product_id, target){
    let productInfo;
    return new Promise((resolve, reject)=>{
        $.get(
            "php/rest.php",
            { param : product_id, op : "searchproduct"},
            (response) => {
                try {
                    let tab = target.attr('id').replace('-container', '');
                    response = response.substring(0, response.length-1).concat(`, "tab" : "${tab}"}`);
                    productInfo = JSON.parse(response);
                    resolve(productInfo);
                }
                catch(e){
                    reject(new Error("Couldn't load product: "+e.message));
                }
            }
        );
    }).then((fullfilled) => { // in fullfilled c'è la robaccia che ho settato prima;
        $.get(
            "components/private_card.php",
            fullfilled,
            (response) => {
                target.append(response);
            }
        );
    }).catch(function (error) {
        console.log(error.message);
    });
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

function getCookie(c_name) {
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

export function updateTotal() {
    $.get(
        "php/rest.php",
        { username : username, op : "get_total"},
        (response) => {
            console.log(JSON.parse(response));
            let price = JSON.parse(response);
            $('#total-cart').html("$"+(price===null? '0' : price)).animate($('#total-cart').width(), 'slow');
        }
    );
}

function initCart(){
    new Promise((resolve, reject)=>{
        $.get(
            "php/rest.php",
            {
                param : 'cart',
                op : 'latest_prod'
            },
            (response) => {
                console.log('initializing cart with: '+response);
                try{
                    cart = JSON.parse(response);
                    resolve(cart);
                    console.log(cart);
                } catch (e) {
                    reject(new Error('lol'));
                }

            }
        );
    }).then((fulfilled)=>{
        createCookie('cart', JSON.stringify(fulfilled), 1);
        console.log(document.cookie);
    });
}