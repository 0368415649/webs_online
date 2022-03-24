show_main_trousers();
function show_data_item(data,x,y,z){
    s='';
    // alert(data.data);
        for(i=x ; i<y ; i++){ 
           var  percent = data.data[i]["percent"];
          var  liked  = data.data[i]["liked"];

            // alert(percent);
            if(percent != 0){
                var  ya = Math.round( data.data[i]["price2"]*((100-percent)/100));

                        }
        s+=`
                    <div class="col l-3 m-4 c-6 mr br" onclick=show_more${z}(${i})>  
                     <div class="home-product-item">      
                    <img class="home-product-item__img2" src="${data.data[i]["link"]}" alt="" >       
                    <h4 class="home-product-item__name name${i}">        
                    ${data.data[i]["name"]}           
                    </h4>       
                    <div class="home-product-item__price">`;
                    if(percent != 0){              
         s+=`         <span class="home-product-item__price-old">${data.data[i]["price"]}Đ</span> 
                    <span class="home-product-item__price-new">${ya}.000Đ</span>  `   ;    

                    }else{
                        s+=`  <span class="home-product-item__price-new">${data.data[i]["price"]}Đ</span>`;
                    }
        
        s+=`            </div>        
                    <div class="home-product-item__action">       
                    <div class="home-product-item__action-like">           
                    <i class="home-product-item__action-like-1 fas fa-heart"></i>              
                     </div>           
                    <div class="home-product-item__action-rating">           
                    <i class="fas fa-star"></i>                
                    <i class="fas fa-star"></i>               
                    <i class="fas fa-star"></i>                
                    <i class="fas fa-star"></i>               
                    <i class="fas fa-star"></i>               

                     </div>           
                    </div>        
                    <div class="home-product-item__origin">       
                    <span class="home-product-item__origin-brand">${data.data[i]["sold"]}</span>           
                    <span class="home-product-item__origin-name">Đã bán</span>         
                    </div>`;


             if(liked == "liked"){                       
                s+=`     <div class="home-product-item__favourite">     
                    <i class="home-product-item__favourite-check favourite-color fas fa-check"></i>            
                    <span class="favourite-color"> Yêu thích </span>            
                    </div>`; 
                    }        

            if( percent != '0'){      

                s+=`         <div class="home-product-item__sale-off">       
                    <span class="home-product-item__precent ">${data.data[i]["percent"]}%</span>          
                    <span class="home-product-item__sale-off-label">GIẢM</span>           
                    </div>    
 
                     `;
                }
                s+=`    </div>           
                </div>     `
}
            document.querySelector(".x").innerHTML = s;
            document.querySelector(".main").style.display = "block";
}

function show_shirt(){
    shirt.classList.add("gird2_item-clicked");
    trousers.classList.remove("gird2_item-clicked");
}
function show_trousers(){
    shirt.classList.remove("gird2_item-clicked");
    trousers.classList.add("gird2_item-clicked");
}
function show_buy1(){
    link_buy2.classList.add("link_buy-color");
    link_buy1.classList.remove("link_buy-color");
    link_buy2.style.display ="block";
    link_buy1.style.display ="none";
}
function show_buy2(){
    link_buy1.classList.add("link_buy-color");
    link_buy2.classList.remove("link_buy-color");
    link_buy1.style.display ="block";
    link_buy2.style.display ="none";
}
//show_main()
function show_main_trousers(){
    document.querySelector(".main").style.display = "none";
    fetch("data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,0,8,1);
    show_trousers();
    show_buy1();
})          
}
function show_main_trousers2(){
    // alert();
    document.querySelector(".main").style.display = "none";

    fetch("data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,8,16,1);
    show_trousers();
    show_buy2();
})         
}
function show_main_shirt(){
    document.querySelector(".main").style.display = "none";
    fetch("data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,0,8,2);
    show_shirt();
    show_buy1();
})       
}
function show_main_shirt2(){
    document.querySelector(".main").style.display = "none";
    fetch("data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,8,16,2);
    show_shirt();
    show_buy2();
})        
}

function show_sold(){
    // document.querySelectorAll(".home-product-item__origin").style.color = "red";
    document.querySelector(".main").style.display= "none";
    document.querySelector(".gird10_header_left-item-1").classList.toggle("orange");
    fetch("sold_data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,0,8,3);
    show_trousers();
    show_buy1();
    if(check_show_sold.classList.value != "gird10_header_left-item gird10_header_left-item-1 orange"){
        document.querySelector(".main").style.display= "block";
        show_main_trousers();
    }
})
}
// show_sold2
function show_sold2(){
    fetch("sold_data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,8,16,3);
   show_trousers();
    show_buy2();
})      
}
//show_sold3
function show_sold3(){
    fetch("sold_data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        show_data_item(data,0,8,4);
        show_shirt();
    show_buy1();
})
}
function show_sold4(){
    fetch("sold_data2.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        show_data_item(data,8,16,4);
        show_buy2();
        show_shirt();
})
}


function show_sold_1(){
    fetch("sold_data.php")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    show_data_item(data,0,8,3);
    show_trousers();
    show_buy1();
})
}


