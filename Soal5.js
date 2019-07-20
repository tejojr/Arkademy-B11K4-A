const jumlahGenap =(batas)=>{   
    let a = 1, b = 2;
    let hasil = 0;
    while(a < batas){
        if(a % 2 === 0){
            hasil +=a;
        }
        let c = a + b;
        a = b;
        b = c;
    }
    return hasil;
}
const jumlahGanjil =(batas)=>{   
    let a = 1, b = 2;
    let hasil = 0;
    while(a < batas){
        if(a % 2 != 0){
            hasil +=a;
        }
        let c = a + b;
        a = b;
        b = c;
    }
    return hasil;
}
console.log(jumlahGenap(100));
console.log(jumlahGenap(1000));
console.log(jumlahGanjil(100));
console.log(jumlahGanjil(1000));