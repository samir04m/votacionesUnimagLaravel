@extends('template.base')

@section('title', 'Portal Jurado')


@section('content')

    @include('template.modules.resultados')

@endsection


@section('extrajs')


	<script type="text/javascript">
		$(document).ready(function(){

		    @if(Session::has('message'))
		    	Materialize.toast("{{Session::get('message')}}", 3000, 'rounded')
		    @endif

		 	// $('#registro-usuario').modal('open');
		});

	</script>
@endsection
