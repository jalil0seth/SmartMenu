// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];
    
    // Constructor
    function Item(name, price, imgproduct, count) {
      this.name = name;
      this.price = price;
      this.count = count;
      this.imgproduct = imgproduct;
    }
    
    // Save cart
    function saveCart() {
      sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    }
    
      // Load cart
    function loadCart() {
      cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
      loadCart();
    }
    
  
    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};
    
    // Add to cart
    obj.addItemToCart = function(name, price, imgproduct, count) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count ++;
          saveCart();
          return;
        }
      }
      var item = new Item(name, price, imgproduct, count);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(name, count) {
      for(var i in cart) {
        if (cart[i].name === name) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(name) {
        for(var item in cart) {
          if(cart[item].name === name) {
            cart[item].count --;
            if(cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
      }
      saveCart();
    }
  
    // Remove all items from cart
    obj.removeItemFromCartAll = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }
  
    // Clear cart
    obj.clearCart = function() {
      cart = [];
      saveCart();
    }
  
    // Count cart 
    obj.totalCount = function() {
      var totalCount = 0;
      for(var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }
  
    // Total cart
    obj.totalCart = function() {
      var totalCart = 0;
      for(var item in cart) {
        totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }
  
    // List cart
    obj.listCart = function() {
      var cartCopy = [];
      for(i in cart) {
        item = cart[i];
        itemCopy = {};
        for(p in item) {
          itemCopy[p] = item[p];
  
        }
        itemCopy.total = Number(item.price * item.count).toFixed(1);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
  
    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
  })();
  
  
  // *****************************************
  // Triggers / Events
  // ***************************************** 
  // Add item
  $('.add-to-cart').click(function(event) {
    event.preventDefault();
    var name = $(this).data('name');
    var imgProduct = $(this).data('imgproduct');
    console.log(imgProduct);
    var price = Number($(this).data('price'));
    shoppingCart.addItemToCart(name, price, imgProduct, 1);
    displayCart();
  });
  
  // Clear items
  $('.clear-cart').click(function() {
    shoppingCart.clearCart();
    displayCart();
  });
  
  function totalS(){
    if (shoppingCart.totalCart() <150){
      return 9.9;
    }else{
      return 0;
    }
  }

  function totalP(){
    if (shoppingCart.totalCart() <150){
      return shoppingCart.totalCart()+9.9;
    }else{
      return shoppingCart.totalCart();
    }
  }

  function totalR(){
    if (shoppingCart.totalCart() <120){
      return (120-shoppingCart.totalCart()).toFixed(2);
    }else{
      return 0;
    }
  }

  function shake(thing) {
    var interval = 80;
    var distance = 5;
    var times = 2;
  
    for (var i = 0; i < (times + 1); i++) {
      $(thing).animate({
        left:
          (i % 2 == 0 ? distance : distance * -1)
      }, interval);
    }
    $(thing).animate({
      left: 0,
      top: 0
    }, interval);
  }
  
  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    var output22 = "";
    for(var i in cartArray) {
        output += "<div class='cart-single-meal'>"
        + "<div class='cart-row'>"
        + "<span class='cart-meal-amount'>" + cartArray[i].count + "x</span>"
        + " <span class='cart-meal-name'><img src='" + cartArray[i].imgproduct + "' width='50px'/></span>"
        + "<span class='cart-meal-name'>" + cartArray[i].name + "</span>"
        + "<div class='cart-meal-edit-buttons'>"
        + "     <div class='cart-meal-edit-delete minus-item' data-name='" + cartArray[i].name + "'></div>"
        + "    <div class='cart-meal-edit-add plus-item' data-name='" + cartArray[i].name + "'></div>"
        + " </div>"
        + " <span class='cart-meal-price '>"
        + cartArray[i].total
        + " </span>"
        + " <span class='cart-meal-delete delete-item' data-name='" + cartArray[i].name + "'></span>"
        + " </div>"
        + "</div>";

      output22 += "<tr>"
        + "<td>" + cartArray[i].name + "</td>" 
        + "<td>(" + cartArray[i].price + ")</td>"
        + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name='" + cartArray[i].name + "'>-</button>"
        + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
        + "<button class='plus-item btn btn-primary input-group-addon' data-name='" + cartArray[i].name + "'>+</button></div></td>"
        + "<td><button class='delete-item btn btn-danger' data-name='" + cartArray[i].name + "'>X</button></td>"
        + " = " 
        + "<td>" + cartArray[i].total + "</td>" 
        +  "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart());

    $('.total-shipping').html(totalS());
    $('.total-p').html(totalP());
    $('.total-r').html(totalR());
    $('.total-count').html(shoppingCart.totalCount());
    if(totalR()==0){
      $('.remining').hide();
      $(".cartbutton-button").removeClass("btn-disabled");
    }else{
      $('.remining').show();
      $(".cartbutton-button").addClass("btn-disabled");
    }

    if(shoppingCart.totalCart()>0){
      $('.jig-cart-empty-state ').hide();
      $('#products').show();
      $('.cart-sum').show();
      
      $('#toshake').shake({
        direction: "up",
        distance: 2,
        times:2
      });
    }else{
      $('#products').hide();
      $('.cart-sum').hide();
      $('.jig-cart-empty-state').show();
    }
  }
  
  // Delete item button
  
  $('.show-cart').on("click", ".delete-item", function(event) {
    var name = $(this).data('name');
    shoppingCart.removeItemFromCartAll(name);
    displayCart();
  })
  
  
  // -1
  $('.show-cart').on("click",".minus-item", function(event) {
    var name = $(this).data('name');
    shoppingCart.removeItemFromCart(name);
    displayCart();
  })
  // +1
  $('.show-cart').on("click", ".plus-item", function(event) {
    var name = $(this).data('name');
    shoppingCart.addItemToCart(name);
    displayCart();
  })
  
  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
     var name = $(this).data('name');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
  });
  
  displayCart();