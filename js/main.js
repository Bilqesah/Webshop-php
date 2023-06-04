//count the final price for each item
let numItem=document.querySelectorAll(".num_items");
let itemPrice=document.querySelectorAll(".item_price");
let finalPrice=document.querySelectorAll(".fPrice");
//console.log(numItem);
// console.log(itemPrice);
for(let i=0;i<numItem.length;i++){
    numItem[i].onchange= function(){
        // console.log(numItem[i].value);
        // console.log(itemPrice[i].innerHTML);
        finalPrice[i].innerHTML=`${(numItem[i].value)*parseInt(itemPrice[i].innerHTML)}$`;

     }
}
//add item_id in the cart
for(let i=0;i<numItem.length;i++){
    document.querySelectorAll(".id")[i].innerHTML=i+1;

}
