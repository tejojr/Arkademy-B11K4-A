const PakBrul= (operasi, N, arrdig) =>{
	let hasil=0, penampung='', dk=[];

	if (N>1000) {
		return false
	}else{
		for(let i = 0; i <= N ; i++){
			penampung +=i.toString(); 
		}
		for(let i = 0; i <arrdig.length ; i++){
			dk[i] = parseInt(penampung[arrdig[i]]); 
		}
		switch (operasi) {
			case "SUM":
			hasil = dk.reduce((a, b) => a + b, 0);
			break;
			case "MUL":
			let mul=1;
			for (let i = 0; i < dk.length; ++i) {
				mul *= dk[i];
			}
			hasil = mul;
			break;
			case "SUB":
			hasil = dk.reduce((a, b) => a - b, dk[0]*2);
			break;
			case "DIV":
			hasil = dk.reduce((a, b) => a / b, dk[0]*dk[0]);
			break;
			default:
			hasil = 0;
			break;
		}

	}

	return hasil;

}
console.log(PakBrul("SUM",20,[11,13,15]));
console.log(PakBrul("MUL",20,[12,15,17]));
console.log(PakBrul("SUB",20,[6,3,1]));
console.log(PakBrul("DIV",20,[6,3,2]));