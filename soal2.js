const is_username_valid = (uname) =>{
	let cek = RegExp(/^[a-zA-Z][a-zA-Z0-9]{5,9}$/).test(uname)
	return cek;
}
const is_password_valid = (pass) =>{
	let cek = RegExp(/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+=])(?=.*=).*$/).test(pass);
	return cek;
}

console.log(is_username_valid('Xrutaf888'));
console.log(is_username_valid('1Diana'));
console.log(is_password_valid('passW0rd='));
console.log(is_password_valid('C0d3YourFuture!#'));