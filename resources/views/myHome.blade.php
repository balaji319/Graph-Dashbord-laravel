@extends('theme.default')

@section('title', 'Call-Q Reporting Service')
@section('content')
      <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home<small></small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Advert Spikes Past Hour / Mon - Dec. 24, 2018<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#" onclick="updatetime(0)">Live </a>
                          </li>
                          <li><a href="#">5 Second</a>
                          </li>
                          <li><a href="#">15 Second </a>
                          </li>
                          <li><a href="#">30 Second</a>
                          </li>
                          <li><a href="#">1 min</a>
                          </li>
                           <li><a href="#">5 min</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <div id='lineChart_load'><i>loading...</i></div> -->
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hourly Calls / Mon - Dec. 24, 2018 <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">

            </div>
            <div class="clearfix"></div>
            <div class="row">
           \

              <div class="clearfix"></div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Most Recent Calls <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Station</th>
                          <th>	Caller ID</th>
                          <th>Duration</th>
                          <th>Complete?</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

     <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Top Active Numbers / Mon - Dec. 24, 2018 <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Station</th>
                          <th>Calls</th>
                          <th>Last Call</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>

                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>

                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>

                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

            </div>
          </div>

    <!-- jQuery -->
    <script src="{!! asset('vendors/jquery/dist/jquery.min.js') !!}"></script>
            <script type="text/javascript">

    function init_charts_home(type,data) {
        console.log('run_charts  typeof [' + typeof (Chart) + ']');
        if( typeof (Chart) === 'undefined'){ return; }
         console.log('init_charts');
        Chart.defaults.global.legend = {
          enabled: false
        };
      if(type=='lineChart'){
        // Line chart
      if ($('#lineChart').length ){

        var ctx = document.getElementById("lineChart");
        // var lineChart = new Chart(ctx, {
        // type: 'line',
        // data: {
        //   labels: ["January", "February", "March", "April", "May", "June", "July"],
        //   datasets: [{
        //   label: "My First dataset",
        //   backgroundColor: "rgba(38, 185, 154, 0.31)",
        //   borderColor: "rgba(38, 185, 154, 0.7)",
        //   pointBorderColor: "rgba(38, 185, 154, 0.7)",
        //   pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
        //   pointHoverBackgroundColor: "#fff",
        //   pointHoverBorderColor: "rgba(220,220,220,1)",
        //   pointBorderWidth: 1,
        //   data: [31, 74, 6, 39, 20, 85, 7]
        //   }, {
        //   label: "My Second dataset",
        //   backgroundColor: "rgba(3, 88, 106, 0.3)",
        //   borderColor: "rgba(3, 88, 106, 0.70)",
        //   pointBorderColor: "rgba(3, 88, 106, 0.70)",
        //   pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
        //   pointHoverBackgroundColor: "#fff",
        //   pointHoverBorderColor: "rgba(151,187,205,1)",
        //   pointBorderWidth: 1,
        //   data: [82, 23, 66, 9, 99, 4, 2]
        //   }]
        // },
        // });


var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets:  [{
          label: "My First dataset",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: getRandomIntInclusive(-1,2)
          }, {
          label: "My Second dataset",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: getRandomIntInclusive(-1,2)
          }]

  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: "Dynamically Update Chart Via Ajax Requests",
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
                  min:0,
                  stepSize: 0.5,
              }
      }]
    }
  }
});
function getRandomIntInclusive(min, max) {
  // min = Math.ceil(min);
  // max = Math.floor(max);
  // return Math.floor(Math.random() * (max - min + 1)) + min;

   var arr = [];
for (var i = 0, l = 20; i < l; i++) {
    arr.push(Math.random() * (max - min + 1))
}
return arr;
}

function getRandomIntInclusiveArray(len) {
  var arr = [];
for (var i = 0, l = len; i < l; i++) {
    arr.push(Math.round(Math.random() * l))
}
return arr;
}
postId =0;
// logic to get new data
var getDataline = function() {
  $.ajax({
    url: 'api/my-bar',
    success: function(data) {
      // process your data to pull out what you plan to use to update the chart
      // e.g. new label and a new data point
      console.log("aaaaaa");
      console.log(myChart.data)
      // add new label and data point to chart's underlying data structures
      //myChart.data.labels.push("Post " + postId++);
      myChart.data.datasets[0].data=getRandomIntInclusive(-1,2);
      myChart.data.datasets[1].data=getRandomIntInclusive(-1,2);
      // re-render the chart
      myChart.update();
    }
  });
};

function updatetime(type){

  alert("aaa")
}
// get new data every 3 seconds
setInterval(getDataline, 5000);
      }

      }else if(type=='mybarChart'){

        // Bar chart

      if ($('#mybarChart').length ){

        // var ctx_live = document.getElementById("mybarChart");
        // var mybarChart = new Chart(ctx_live, {
        // type: 'bar',
        // data: data,

        // options: {
        //   scales: {
        //   yAxes: [{
        //     ticks: {
        //     beginAtZero: true
        //     }
        //   }]
        //   }
        // }
        // });


function getRandomIntInclusiveArray(len) {
  var arr = [];
for (var i = 0, l = len; i < l; i++) {
    arr.push(Math.round(Math.random() * l))
}
return arr;
}
// create initial empty chart
var ctx_live = document.getElementById("mybarChart");
var labelArray = [];
for (var i = 0, l = 24; i < l; i++) {
  labelArray.push(i)
}
var myChart = new Chart(ctx_live, {
  type: 'bar',
  data: {
    labels: labelArray,
    datasets: [{
          label: '# of Votes',
          backgroundColor: "#26B99A",
          data: getRandomIntInclusiveArray(24)
          }, {
          label: '# of Votes',
          backgroundColor: "#03586A",
          data: getRandomIntInclusiveArray(24)
          }]

  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: "Dynamically Update Chart Via Ajax Requests",
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{

               ticks: {
                  min: 0,
                  stepSize: 10,
              }
      }]
    }
  }
});



// logic to get new data
var getData = function() {
  $.ajax({
    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
    success: function(data) {
      // process your data to pull out what you plan to use to update the chart
      // e.g. new label and a new data point
      console.log("aaaaaa");
      console.log(myChart.data)
      // add new label and data point to chart's underlying data structures
      //myChart.data.labels.push("Post " + postId++);
      myChart.data.datasets[0].data=getRandomIntInclusiveArray(24);
      myChart.data.datasets[1].data=getRandomIntInclusiveArray(24);
      // re-render the chart
      myChart.update();
    }
  });
};

// get new data every 3 seconds
setInterval(getData,5000);
      }
      }
    }
jQuery(document).ready(function($){

    var myUrl = "api/my-bar";
      getAjax(myUrl);

var tempData={
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [{
          label: '# of Votes',
          backgroundColor: "#26B99A",
          data: [51, 30, 40, 28, 92, 50, 45]
          }, {
          label: '# of Votes',
          backgroundColor: "#03586A",
          data: [41, 56, 25, 48, 72, 34, 12]
          }]
        }

        console.log(tempData)
         init_charts_home('mybarChart',tempData);
          init_charts_home('lineChart',tempData);



});

function getAjax(url){

  $.ajax({url: url, success: function(result){
    var barChartData =JSON.parse(JSON.stringify(result))

    //init_charts_home('mybarChart',result);
      console.log(mybarChart.data)
      // myChart.data.labels.push("Post " + postId++);
      // myChart.data.datasets[0].data.push(getRandomIntInclusive(1, 25));

      // // re-render the chart
      // myChart.update();

    }});
}

</script>

          @endsection
