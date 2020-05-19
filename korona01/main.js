
const btnUstawInput = document.querySelector(".ustawInput");
const cena = document.querySelector(".cena");
const cenaUSD = document.querySelector(".cenaUSD");
const pln = document.querySelector(".pln");
const btnObliczUSD = document.querySelector(".obliczUSD");
const wynikTxtUSD = document.querySelector(".wynikUSD");

btnUstawInput.addEventListener('click', function(){
    console.log("dziala")
    cena.innerHTML = '<input type="text" class="inputCena1USD">' 
})


btnObliczUSD.addEventListener('click', function(){
    const inputCena1USD = document.querySelector(".inputCena1USD");
   

    if(inputCena1USD===null){ 
        wynikTxtUSD.innerText = pln.value * cenaUSD.innerHTML; 
    }else{
        wynikTxtUSD.innerText = pln.value * inputCena1USD.value; 
    }

    cena.innerHTML = '<span class="cenaUSD" style="color: black">0.10</span>';
    cena.innerText = inputCena1USD.value;
    cena.style.background = "lightgray";
})


