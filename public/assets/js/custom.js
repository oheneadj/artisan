
// Sale Reveal
const saleCheck = document.getElementById('sale_check');
const salePrice = document.getElementById('sale_price');

saleToggle()

saleCheck.addEventListener('click', saleToggle)

function saleToggle(){
    if (saleCheck.checked !== true){
        salePrice.classList.add("d-none")
    }else{
        salePrice.classList.remove("d-none")

    }
}
