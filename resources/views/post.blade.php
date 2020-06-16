@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">post</div>
                <h1></h1>
                <div class="card-body">
                        <div class="row">

                    <div class="card col-md-12" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->body }}</p>
                            <a href="{{ route('posts.charts',$post->id) }}">chart</a>
                        </div>
                      </div>
                </div>
                </div>
            </div>
            <div class="card">
                <h1>Male graph</h1>
                <canvas id="canvas" style="display: block; width: 1000px; height: 500px;" width="1000" height="500" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="card">
                <h1>Female graph</h1>
                <canvas id="canvas2" style="display: block; width: 1000px; height: 500px;" width="1000" height="500" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>

</div>
@endsection
<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script>
    var males = @json($logmale);
    var posts = @json($post);
console.log(posts)
    var Days =@json($logmale);
    daysArr= Days.map(element=>{
       return element['date']
   });

   maleArr= males.map(element=>{
       return element['data'];
   });
		var config1 = {
			type: 'bar',
			data: {
				labels: daysArr,
				datasets: [{
					label: 'Male',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: maleArr,
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Views graph'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
			}
		};



		var colorNames = Object.keys(window.chartColors);

</script>
/////////////// female graph
<script>
    var females = @json($logfemale);

    var Days =@json($logfemale);
    daysArr= Days.map(element=>{
       return element['date']
   });

   femaleArr= females.map(element=>{
       return element['data'];
   });
	    var config2 = {
			type: 'bar',
			data: {
				labels: daysArr,
				datasets: [{
					label: 'Female',
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: femaleArr,
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Views graph'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
			}
		};

		window.onload = function() {
			var ctx1 = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx1, config1);

			var ctx2 = document.getElementById('canvas2').getContext('2d');
			window.myLine = new Chart(ctx2, config2);
		};


		var colorNames = Object.keys(window.chartColors);

</script>
