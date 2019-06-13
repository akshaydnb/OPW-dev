var chart6 = c3.generate({
	bindto: '#barGraphOne',
	data: {
		columns: [
                        ['GST Input', 1000, 3500, 1800],
                        ['GST Output', 1500, 4500, 3600],
		],
		type: 'bar',
		names: {
			lead1: 'Gst Input',
			lead3: 'GST Output',
		},
		colors: {
			lead1: '#ff6a5d',
			lead2: '#8bc34a',
		},
	},
	grid: {
		x: {
			show: true
		},
		y: {
			show: true
		}
	}
});