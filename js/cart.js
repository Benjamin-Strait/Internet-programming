/*
Upon click of a menu item in menu.php, this adds the item to the local storage and displays a message that the
item is in the users cart.
*/
"use strict"; //Every variable must be declared with let or var
function addToCart(id) 
{
    let value = id.value;
    let comicinfo = value.split("|");
    addtoStorage(comicinfo);
    alert(comicinfo[2] + " has been added to the cart!");
}


function displayCart()
{
    let out = getCartItems();
    document.getElementById("cartinfo").innerHTML = out;
 }

/*
This function is called during the execution of the function addtocart() as seen above.
It takes an array of information aboutput the cart item and adds it to local storage.
*/
function addtoStorage(comicinfo)
{
  //create array and get comic identitfier
  var cart={};
  var cid=comicinfo[0];

  //if not empty, get previous items that are already in the cart
  if((localStorage.getItem("cart")!=null))
    {
     cart=JSON.parse(localStorage.getItem("cart"));
    }

  //if there is an item to add, then increase the amount of a type of pizza that is already in the cart
  if(cart[cid]!=null)
     cart[cid][5]+=1;
  else
  {
    //if item not previously selected, set amount to one and set cart to contain pizza information
    comicinfo[5]=1;
    cart[cid]=comicinfo;   
  }

  //Set the local cache to include the new additions
  localStorage.setItem("cart",JSON.stringify(cart));
}

//function removes all items from local storage
function clearcartHTML()
{
  //clear all items in the cache
  localStorage.clear();

  //refresh the cart.html page
  document.getElementById("cartinfo").innerHTML="";
}

/*
Function to show all of the items that reside in the cart to a div with the id "info"
*/
function getCartItems()
{
  //create storage for output and get items from local storage
  var output = '';
  var cartStr = localStorage.getItem("cart");

  //if local storage not null, display all items
  if(cartStr!=null)
  {
    //parse the input array
    var cart = JSON.parse(cartStr);

    //print all items
    for(let item in cart)
    {
      //retrieve necessary information
      var cName = cart[item][2];
      var price = cart[item][8];
      var imgN = cart[item][10];
      var quantity = cart[item][5];

      //format and put all items into outputput to be displayed
     output+= ` <div class="row mt-4"> `;
      output+= `<div class="col-sm-2"> <img src="img/${imgN}" class="rounded" alt="${imgN}" width="70%" height="70%"></div>`;
      output+= ` <div class="col-sm-2"> <div class = "row"><i>${cName}</i></div>`;
      output+= `<div class = "row">$${price * quantity}.00</div>`;
      output+= `<div class = "row"> Amount: ${quantity}</div>`;
      output+= `</div>`;
    }
  }
  return output;
}


/*
Function retrieves the necessary information to create the SQL statements for the Orders table in the database
*/
function getOrdersForServer()
{
  //create place to store outputput and get items from local storage
  var order = {};
  var cartStr = localStorage.getItem("cart");

  //if not empty, get all items
  if(cartStr!=null)
  {
    //break item into an array
    var cart = JSON.parse(cartStr);
    for(let item in cart)
    {
      var cid = cart[item][9]; //get comic ID
      var quantity = cart[item][5]; //get quantity of item

      //place item in associate array with pizza id set with the quantity
      order[cid] = quantity;
    }

    //Send the order to be handled by checkoutputHandle.php
    document.getElementById("order").value = JSON.stringify(order);
  }
}

/*
delete local storage and inform the user that the order has been cancelled
*/
function cancel()
{
  alert("Your Order has been canceled and your cart has been cleared");
  clearcartHTML();
}
