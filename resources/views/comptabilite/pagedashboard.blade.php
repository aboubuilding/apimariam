@extends('layout.app')

@section('title')
    Comptabilité | Tableau de bord
@endsection

@section('css')


@endsection




@section('contenu')

@include('components.events')

  @include('comptabilite.dashbord.content')

		

 @endsection

 @section('js')


 <!-- Required vendors -->
 <script src="{{asset('admin')}}/vendor/global/global.min.js"></script>
	<script src="{{asset('admin')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{asset('admin')}}/vendor/chart-js/chart.bundle.min.js"></script>
	<script src="{{asset('admin')}}/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="{{asset('admin')}}/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Apex Chart -->
	<script src="{{asset('admin')}}/vendor/apexchart/apexchart.js"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('admin')}}/vendor/peity/jquery.peity.min.js"></script>	
	<!-- Dashboard 1 -->
	<script src="{{asset('admin')}}/js/dashboard/dashboard-1.js"></script>


  


@endsection