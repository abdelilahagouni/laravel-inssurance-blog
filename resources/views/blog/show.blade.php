@extends('layouts.app')



@section('content')

<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold "> {{ $post->title }}</h1>
    <div class="mt-2">
        by  <span class="text-gray-500 italic"> {{$post->user->name}}</span>
        on  <span class="text-gray-500 italic"> {{date('m-d-Y',strtotime($post->updated_at))}}</span>
    </div>
</div>

<div class=" container m-auto  pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div class="text-l text-gray-700 py-8 leading-6">
    {{$post->description}}
    </div>
    @if(Auth::user() && Auth::user()->id == $post->user_id)
    <a href="/blog/{{$post->slug}}/edit" 
        class="bg-green-700
         text-gray-100 py-3 pc-5 mt-6
         inline-block 
         rounded-lg font-bold uppercase
          text-lg place-self-start">Edit Posts </a>
     @endif
</div>
@endsection