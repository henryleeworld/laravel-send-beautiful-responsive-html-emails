@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>您好</strong></h4>
		<p>這是一封測試信</p>

	@include('beautymail::templates.widgets.articleEnd')


	@include('beautymail::templates.widgets.newfeatureStart')

		<h4 class="secondary"><strong>在一次您好</strong></h4>
		<p>這是另一封測試信</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop