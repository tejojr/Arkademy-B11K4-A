const biodata = () => {
	const mybio = {
		nama: 'Ammar Annajih Pasifiky',
		age: 17,
		address: 'Desa Jetis RT01 RW01 Kec.Kemangkon, Kab. Purbalingga, Prov. Jawa Tengah',
		hobbies : ['Nonton anime', 'main dota2', 'iseng goding'],
		is_married : false,
		list_school : [
			{
				nama : 'SD Negeri 2 Jetis',
				year_in : '2007',
				year_out :'2013',
				major	:'',
			},
			{
				nama:'SMP N 1 Purbalingga',
				year_in: '2013',
				year_out: '2016',
				major:'',
			},
			{
				nama: 'SMK Negeri 1 Purbalingga',
				year_in: '2016',
				year_out:'2019',
				major:'Software Enginering',
			},
		],
		skills :[
			{
				nama: 'SQL(MySQL/SQLServer)',
				level: 'advanced'
			},
			{
				name: 'PHP',
				level: 'advanced'
			},
			{
				name: 'C#',
				level: 'advanced'
			},
			{
				
				name: 'Java',
				level: 'advanced'
			},
			{
				name : 'Javascript',
				level : 'beginner'
			}

		],
		interest_in_coding: true
	};
	return JSON.stringify(mybio);

}
console.log(biodata());