<div class="container">
    <div class="card">
        <div class="card-content">
            <center><h4>Resultado votaciones</h4></center>

        </div>
        <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                  @foreach($organos as $organo)
                    <li class="tab"><a href="#seccion{{$organo->id}}">{{$organo->nombre}}</a></li>
                  @endforeach
              </ul>
        </div>
        <div class="card-content grey lighten-4">
            @foreach($organos as $organo)
                <div id="seccion{{$organo->id}}">
                    <table>
                        <thead>
                          <tr>
                              <th>Numero</th>
                              <th>Candidato</th>
                              <th>Numero de votos</th>
                          </tr>
                        </thead>
                        <tbody>
                            <div class="hide">{{$n = 0}}</div>
                            @foreach($organo->candidatos as $candidato)
                                <tr>
                                    <td>{{$candidato->numero}}</td>
                                    <td>{{$candidato->usuario->nombre1}} {{$candidato->usuario->apellido1}}</td>
                                    <td>{{count($candidato->votos)}}</td>
                                    <div class="hide">{{$n += count($candidato->votos)}}</div>
                                </tr>
                            @endforeach
                        </tbody>
                  </table>
                  <div class="right">Total votos en el organo <b>{{$n}}</b></div>
                </div>
            @endforeach
        </div>
      </div>
      <div class="row">
          @foreach($organos as $organo)
              <div id="piechart{{$organo->id}}" style="width: 900px; height: 500px;"></div>
        @endforeach
      </div>
</div>

@section('extrahead')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

        @foreach($organos as $organo)
        var data = google.visualization.arrayToDataTable([
            ['Candidatos', 'Votos'],
            @foreach($organo->candidatos as $candidato)
            ['{{$candidato->usuario->nombre1}} {{$candidato->usuario->apellido1}}', {{count($candidato->votos)}}],
            @endforeach
        ]);
        var options = {
          title: '{{$organo->nombre}}s',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart{{$organo->id}}'));
        chart.draw(data, options);
        @endforeach
     }
</script>
@endsection
