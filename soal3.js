const belahkata =(kata)=>{
  const acuan = ['pro', 'gram', 'merit', 'program', 'it', 'programmer']; 
  let hasil = [];
  const Cari = (param, param2) => {
    if (param2.length === 0){
      hasil.push(param.join(' '));
      return;
    }

    for (let i = 0; i < acuan.length; i++){
      if (param2.indexOf(acuan[i]) === 0){
        param.push(acuan[i]);
        Cari(param, param2.slice(acuan[i].length));
        param.pop();
      }
    }
  }
  Cari([], kata);
  return hasil;
};
console.log(belahkata('programit'));
console.log(belahkata('programmerit'));