@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => '哈囉！',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>今天將是美好的一天！</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => '請點擊我',
        	'link' => 'http://google.com'
    ])

@stop