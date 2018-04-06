<html>
<head>
	<script type="text/javascript" src="moment.js"></script>
</head>
<body>
	<input type="date" id="date1">
	<br>
	<button onclick="countdown()">Click</button>
	<div id="countdown"></div>
	<script type="text/javascript">
		function countdown(){
			// get event day
			var eventTime1 = document.getElementById("date1").value;
			eventTime1 = moment(eventTime1).format('YYYY-MM-DD 23:59:59');
			eventTime = moment(eventTime1).format("X");

			// get current day
			var currentTime1 = moment()._d;
			currentTime1 = moment(currentTime1).format('YYYY-MM-DD HH:mm:ss');
			currentTime = moment(currentTime1).format("X");
			var diffTime = eventTime - currentTime;
			var duration = moment.duration(diffTime*1000, 'milliseconds');
			var interval = 1000;

			if (!moment(eventTime1).isAfter(currentTime1)){
				alert("Nhap ngay lon hon hien tai!");
			}else{
				setInterval(function(){countdown()}, interval);
				duration = moment.duration(duration - interval, 'milliseconds');
				if (duration.days() != 0 || duration.months() != 0 || duration.years() != 0 ){
				document.getElementById("countdown").innerHTML = duration.days() + " days " + duration.hours() + ":" + duration.minutes() + ":" + duration.seconds();
				}
			}
		}
	</script>
</body>
</html>