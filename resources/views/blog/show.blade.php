@extends('layouts.app')



@section('content')

@if(session()->has('message'))
<div class="flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Post edit succesfuly!</span> {{session()->get('message')}}
    </div>
  </div>
  @endif
 
  


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
          text-lg place-self-start">Edit Post 
        </a>

        <form action="/blog/{{ $post->slug}}" method="post" class="inline-block" >

       @csrf




       @method('delete')
       <button type="submit" 
       
        class="bg-red-700
         text-gray-100 py-3 pc-5 mt-6
         inline-block 
         rounded-lg font-bold uppercase
          text-lg place-self-start">Delete  Post
        </button>
        

        </form>

     @endif
    </button>
@endsection