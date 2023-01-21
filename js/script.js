const dropList = document.querySelectorAll(".drop-list select"),
fromCurrency = document.querySelector(".from select"),
toCurrency = document.querySelector(".to select"),

getButton = document.querySelector("form button");

for(let i = 0; i < dropList.length; i++) {
    for(currency_code in country_list){

        // Default from = USD
        // Default to = IDR
        let selected;
        if(i == 0){
            selected = currency_code == "USD" ? "selected" : "";
        } else if (i == 1){
            selected = currency_code == "IDR" ? "selected" : "";
        }
        // membuat tag opsi dengan meneruskan kode mata uang sebagai teks dan nilai
        let optionTag = `<option value="${currency_code}" ${selected}>${currency_code}</option>`;
        // memasukkan opsi tag kedalam tag
        dropList[i].insertAdjacentHTML("beforeend", optionTag);
    }

    // Bendera
    dropList[i].addEventListener("change", e =>{
        loadFlag(e.target);
    });
}

// Fungsi bendera
function loadFlag(element) {
    for(code in country_list){
        if(code == element.value){
            let imgTag = element.parentElement.querySelector("img"); /* Memilih image bendera */
            // Mengambil img bendera dari API sesuai dengan country list
            imgTag.src = `https://flagcdn.com/48x36/${country_list[code].toLowerCase()}.png`;
        }
    }
}

// Loading hasil konversi
window.addEventListener("load", () =>{
    getExchangeRate();
});

getButton.addEventListener("click", e =>{
    e.preventDefault();
    getExchangeRate();
});

// Exchange icon
const exchangeIcon = document.querySelector(".drop-list .icon");
exchangeIcon.addEventListener("click", ()=>{
    let tempCode = fromCurrency.value;
    fromCurrency.value = toCurrency.value;
    toCurrency.value = tempCode;
    loadFlag(fromCurrency); /* Mengubah bendera dari from ke to */
    loadFlag(toCurrency); /* Mengubah bendera dari to ke from */
    getExchangeRate();
})

// Fungsi hasil konversi
function getExchangeRate(){
    const amount = document.querySelector(".amount input"),
    exchangeRateTxt = document.querySelector(".exchange-rate");
    let amountVal = amount.value;
    if(amountVal == "" || amountVal == "0"){
        amount.value = "1";
        amountVal = 1;
    }
    // ambil API
    exchangeRateTxt.innerText = "Menampilkan hasil konversi...";
    let url = `https://v6.exchangerate-api.com/v6/5f83638ebebd083ef7f21aff/latest/${fromCurrency.value}`;
    // fetch dan mengambil res dari converter
    fetch(url).then(response => response.json()).then(result => {
        let exchangeRate = result.conversion_rates[toCurrency.value];
        let totalExchangeRate = (amountVal * exchangeRate).toFixed(2);

        exchangeRateTxt.innerText = `${amountVal} ${fromCurrency.value} = ${totalExchangeRate} ${toCurrency.value}`;
    }).catch(() =>{
        exchangeRateTxt.innerText = "Ada kesalahan!";
    })
}

let hideWave = document.querySelector("#input");
hideWave.addEventListener("click",)