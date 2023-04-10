@extends('layouts.app')



@section('content')

<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold "> All Posts</h1>
</div>
@if (Auth::check())
<div  class="container sm:grid  mx-auto py-5  border-b border-gray-300">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-3 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Add an article </a>

    <div>
        @endif

  @foreach ($posts as $post)
  
<div class="container sm:grid grid-cols-2 gap-12 mx-auto py-15 px-2 border-b border-gray-300">
    <div class="flex">
        <img class="image-cover" src="/images/{{$post->image_path}}" alt="">
    </div>

<div>
    <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
                 {{$post->title}}
    </h2>
    <span>
       by  <span class="text-gray-500 italic"> {{$post->user->name}}</span>
       on  <span class="text-gray-500 italic"> {{date('m-d-Y',strtotime($post->updated_at))}}</span>
    <p class="text-l text-gray-700 py-8 leading-6">
        {{$post->description}}

    </p>

    <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-gray-100 py-3 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Read more </a>

    </span>


</div>

</div>

      
@endforeach      
    



@endsection
