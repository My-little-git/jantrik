const addCartButtons = document.querySelectorAll('.add-cart')

async function getCart(id){
  let response = await fetch('php_scripts/getCart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(id)
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

async function addGood(user_id, good_id){
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

function renderCart(){
  let cart = getCart();
  let goods;
  const goodsId = cart.map((good) => good.id);
  getGoods(goodsId)
      .then(data => {
        goods = goods.map((value) => {

          return ...value, cart.
        })
        console.log(goods)
      })
      .then(() =>{
          // cart.forEach(product => {
          //   const good = goods.find(good => product.id === good.id)
          //   let $html = `
          //     <div class="single-cart-box">
          //         <div class="cart-img">
          //             <a href="#"><img src="img/products/${good.img}" alt="cart-image"></a>
          //         </div>
          //         <div class="cart-content">
          //             <h6><a href="product.html">${good.name}</a></h6>
          //             <span>${product.count} × ${good.pr ice}</span>
          //         </div>
          //         <a class="del-icone" href="#"><i class="fa fa-window-close-o"></i></a>
          //     </div>
          //   `;
          // })
          console.log(3)}
      )
}

function addToCart(id){
  minusGood(id)
      .then(statusOk => {
        if (statusOk){
          if (cart && cart.find(good => id === good.id)){
            cart = cart.map(good => good.id === id ? {...good, count: ++good.count} : good);
          } else {
            cart.push({'id': id, 'count': 1});
          }

          setCart(cart);
        }
      })
}

addCartButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();

    const target = e.target
    const idGood = target.closest('.single-product').dataset.id

    isInStock(idGood)
    .then(inStock => {
      if (inStock){
        console.log(inStock)
        addToCart(idGood)
      } else {
        console.log('good not in stock')
      }
    })
  })
})
