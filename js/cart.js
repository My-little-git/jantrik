const addCartButtons = document.querySelectorAll('.add-cart')
const cartWrapper = document.querySelector('.main-cart-box .cart-header')
const cartCounter = document.querySelector('.cart-counter');
const cartTotal = document.querySelector('.cart-total');
const orderForm = document.querySelector('#order');
const handleAmountButtons = document.querySelectorAll('.product-amount button');
const orderTable = document.querySelector('.your-order tbody');
const totalAmount = document.querySelector('.order-total .amount');

const user_id = 1;

async function getCart(){
  let response = await fetch('php_scripts/getCart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(user_id)
  })

  let result = await response.json();
  return await result;
}

async function isInStock(id){
  let response = await fetch('php_scripts/checkStock.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(id)
  })

  let result = await response.json()
  return await result
}

async function addGood(good_id){
  let response = await fetch('php_scripts/addGood.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify({
      user_id: user_id,
      good_id: good_id
    })
  })

  let result = await response.json()
  return await result
}

async function deleteGood(good_id){
  let response = await fetch("php_scripts/deleteFromCart.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json;charset=utf-8"
    },
    body: JSON.stringify({user_id, good_id})
  });

  let result = await response.json();
  return await result
}

function addOrder(){
  let response = fetch("php_scripts/addOrder.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json;charset=utf-8"
    },
    body: JSON.stringify(user_id)
  })
      .then(data => data.json)
      .then(status => {
        if (status) {
          renderCart();
          renderOrder();
        }
      });
}

function renderCart(){
  cartWrapper.innerHTML = '';

  getCart()
    .then(goods => {
      const total = goods.reduce((acc, good) => acc + good.price * good.amount, 0);

      goods.forEach(good => {
        let $html = `
          <div data-id="${good.id}" class="single-cart-box">
              <div class="cart-img">
                  <a href="#"><img src="img/products/${good.img}" alt="cart-image"></a>
              </div>
              <div class="cart-content">
                  <h6><a href="product.html">${good.name}</a></h6>
                  <span>${good.amount} × ${good.price} руб.</span>
              </div>
              <a class="del-icone" href="#"><i class="fa fa-window-close-o del-cart"></i></a>
          </div>
        `;
        cartWrapper.insertAdjacentHTML('afterbegin', $html);
      });

      cartCounter.textContent = goods.length;
      cartTotal.textContent = total;
    })
}

function renderOrder(){
    getCart()
        .then(cart => {
            const $amount = cart.reduce((accum, el) => accum + Number(el.total), 0);

            orderTable.innerHTML = '';
            cart.forEach(good => {
                const $html = `
                    <tr class="cart_item" data-id="${good['id']}">
                        <td class="product-name">
                            ${good['name']}
                        </td>
                        <td class="product-amount">
                            <button type="button" class="amount-minus">-</button>
                            <strong>${good['amount']}</strong>
                            <button type="button" class="amount-plus">+</button>
                        </td>
                        <td class="product-total">
                            <span class="amount">${good['total']}руб.</span>
                        </td>
                    </tr>
                `;
                orderTable.insertAdjacentHTML('beforeend', $html);
            })
            totalAmount.textContent = `${$amount}руб`;
        })
}

function addToCart(id){
  addGood(id)
      .then(status => {
        if (status){
          console.log(status)
        }
        renderCart();
      })
}

function plusToCart(good_id){
    addGood(good_id)
        .then(status => {
            if (status){
                renderCart();
                renderOrder();
            }
        })
}

function deleteFromCart(id){
  deleteGood(id)
      .then(status => {
        if (status){
          console.log(status)
        }
        renderCart();
      })
}

function minusFromCart(good_id){
    fetch("php_scripts/minusGood.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json;charset=utf-8"
        },
        body: JSON.stringify({
            user_id: user_id,
            good_id: good_id
        })
    })
        .then(data => data.json())
        .then(status => {
            if (status){
                renderCart();
                renderOrder();
            }
        })
}

renderCart();

addCartButtons.forEach(button => {
  button.addEventListener('click', (e) => {
    e.preventDefault();

    const target = e.target;
    const idGood = target.closest('.single-product').dataset.id;

    isInStock(idGood)
    .then(inStock => {
      if (inStock){
        addToCart(idGood)
      } else {
        console.log('good not in stock')
      }
    })
  })
})

window.addEventListener('click', (e) => {
  const target = e.target;
  if (target.classList.contains('del-cart')){
    const idGood = target.closest('.single-cart-box').dataset.id;

    deleteFromCart(idGood);
  }
})

// handleAmountButtons.forEach(button => {
//     button.addEventListener('click', e => {
//         const target = e.target;
//
//         const idGood = target.closest('.cart_item').dataset.id;
//
//         if (target.classList.contains('amount-minus')){
//             minusFromCart(idGood, target)
//         } else if (target.classList.contains('amount-plus')){
//             plusToCart(idGood, target)
//         }
//     })
// })

orderTable.addEventListener('click', e => {
    const target = e.target
    console.log(target.tagName)

    if (target.tagName === "BUTTON"){
        const idGood = target.closest('.cart_item').dataset.id;

        if (target.classList.contains('amount-minus')){
            minusFromCart(idGood, target)
        } else if (target.classList.contains('amount-plus')){
            plusToCart(idGood, target)
        }
    }
})

orderForm.addEventListener('submit', (e) => {
  e.preventDefault();

  addOrder()
})
