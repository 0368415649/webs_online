
function show_cart(){
    var cart = "cart_1.php";
    fetch(cart)
    .then(function(response){
      return  response.json();
    })
    .then(function(data){
        data.data.forEach(function(value,i)  {
            // console.log();
            s='';
            s+=`
            <form action="" method="POST" class="form_${i}">
            <input type="text"  class="tobu" name="remove_cart"  value="${value["id"]}" >
            <div class="cart_model-body-item">
            <img class=' cart_model-body-item-size   ' src="${value["link"]}" alt="">
            <div class="cart_model-body-content">
                <div class="cart_top">
                    <h5 class="top-content">${value["name"]}</h5>
                    <span class="top-price">${value["price"]}.000đ</span>
                </div>
    
                <div class="cart_bottom">
                        <span class="bottom-content">Phân loại hàng :${value["category"]}</span>
                        <button onclick=remove_cart(${value["id"]}) class="remove_cart" href="">Xóa</button>
                </div>
            </div>
            <span class="quantity">x <m class="quantity-font">${value["quantily"]}</m></span>
        </div>
        </form>
        `
        document.querySelector(".cart_model-body").innerHTML += s;
        document.querySelector(".cart-quantity").innerHTML =i+1;
    
        
    
        });
    })
}
show_cart();
// var remove_cart  = document.querySelector(".gird10_header_left-item");
// console.log(remove_cart);


document.querySelector(".header_logo-serach").onblur =function(){
    document.querySelector(".search-history").style.display = "none";
}
document.querySelector(".header_logo-serach").onfocus =function(){
    document.querySelector(".search-history").style.display = "block";
}
