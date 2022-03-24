

function show_more_main(data,i){
    s='';
    s+= `<div class="gird wide color2">
    <form action="" method="POSt">
     <div class="row">
      <div class="col l-6">
     <img class="click-img" src="${data.data[i]["link"]}" alt=""> </div> 
     <div class="col l-6 click-item"> 
                 <div  class="click-name">${data.data[i]["name"]}</div>
                 <div class="click-price">
                         <div class="click-price-name">Giá bán:</div>
                         <div  class="click-price-vnd">${data.data[i]["price"]}Đ</div>
                  </div>
                     <div class="home-product-item__action-rating margin-top">            
                     <i class="fas fa-star"></i>                
                     <i class="fas fa-star"></i>                
                     <i class="fas fa-star"></i>                
                     <i class="fas fa-star"></i>                
                     <i class="fas fa-star"></i>                
                      <span >(87 đánh giá/ ${data.data[i]["sold"]} lượt mua)</span>
                      </div>
                 <div class="click-quantity">
    
                  <div>Số lượng *</div>   
                     <select name="more-quantily" id="">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     </select>
                       <div class="click-button">
                            <div class="click-buy"><i class="fas fa-cart-arrow-down"></i> Đăng ký mua</div>
                            <button class="click-cart" ><i class="fas fa-plus"></i>Thêm vào giỏ hàng</button>
                            </div>
                            <div class="click-back">
                            <div class="click-come" onclick=hiden(${i})>Come Back Home <i class="fas fa-rotate-left"></i></div>
                            </div>

                 </div>
                 <div class="cart-none" >
                    <input value="${data.data[i]["link"]}"  name="more-link" type="text">
                    <input value="${data.data[i]["name"]}" name="more-name" type="text">
                    <input value="${data.data[i]["price"]}" name="more-price" type="text">
                    <input value="${data.data[i]["category"]}" name="more-category" type="text">
                </div>

     </div>    
     </div>
     </form>
     </div>`;
     document.querySelector("#show").innerHTML = s;
     document.querySelector(".hiden").style.display = "none";
     document.querySelector("#show").style.display = "block";
     document.querySelector(".grid-link_buy").style.display = "none";
}
function show_more1(i){
    // alert("3");
                fetch("data.php")
            .then(function(response){
                return response.json();
            })
            .then(function(data){
                show_more_main(data,i)  ; 
            })
    } 
function show_more2(i){
        fetch("data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        show_more_main(data,i)  ; 
    })
}
    // show_more3
function show_more3(i){
        fetch("sold_data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        show_more_main(data,i)  ; 
    })
}
function show_more4(i){
        fetch("sold_data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        show_more_main(data,i)  ; 

})
    
    
}
    