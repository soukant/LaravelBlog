@extends('layout')


@section ('content')

  @include('posts-header')




<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card :post="$posts->first()"/>

{{--    <div class="lg:grid lg:grid-cols-2">--}}
{{--        <x-post-card/>--}}
{{--        <x-post-card/>--}}
{{--    </div>--}}

{{--    <div class="lg:grid lg:grid-cols-3">--}}
{{--        <x-post-card/>--}}
{{--        <x-post-card/>--}}
{{--        <x-post-card/>--}}
{{--    </div>--}}
</main>




@endsection
