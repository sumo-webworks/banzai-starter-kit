@extends('layouts.app')

@section('body')
<section class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center" style="margin-top: 50px;">
	<x-sumo-logo class="w-24 h-24 my-10" />

    <article class="mt-4 bg-white p-8 shadow-xl rounded-xl max-w-xl prose">
	    {!! $content !!}
	</article>
</section>
@endsection
