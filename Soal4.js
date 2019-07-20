const arkaFood = (totalharga,kodevoucher,jarak,pajak) =>{
  let harga=0, totalbiaya=0, ongkir=0, pajakresto=0;
//menghitung diskon voucher
if (kodevoucher== 'ARKAFOOD5') {
  if(totalharga>=50000){
    let hargadiskon=0;
    let diskon= (totalharga/100)*50;
    if(diskon>50000){
      harga=totalharga-50000;
    }
    else{
      harga = totalharga-diskon;
    }
  }else{
    harga=totalharga;
  }
}else if (kodevoucher== 'DITRAKTIRDEMY') {
  if(totalharga>=25000){
    let hargadiskon=0;
    let diskon= (totalharga/100)*60;
    if(diskon>30000){
      harga=totalharga-30000;
    }
    else{
      harga = totalharga-diskon;
    }
  }else{
    harga=totalharga;
  }
} else {
  harga=totalharga;
}
  // menghitung pajak resotran
  if(pajak=="true"){
    pajakresto= (totalharga/100)*5;
  }
 //menghitung jarak
 if(jarak<=1.5){
  ongkir= 5000;
}
else if(jarak>1.5){
  let newjarak= Math.ceil(jarak-1.5) ;
  ongkir= 5000 + (newjarak*3000);
}
 
return harga+ongkir+pajakresto;
};
console.log(arkaFood(75000,"ARKAFOOD5",5,"false"));