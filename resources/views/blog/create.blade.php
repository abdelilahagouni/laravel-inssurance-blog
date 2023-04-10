@extends('layouts.app')



@section('content')

<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold "> All Posts</h1>
</div>

<div class=" container m-auto  pt-15 pb-5">
    <form action="/blog" method="POST"
    enctype="multipart/form-data"
    >
    @csrf
      
        <input type="text"
        name="title"
        placeholder="Title"
        class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5 "
    
        >
        <textarea
         name="description"
         placeholder="description"
         class="w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5"
         
         ></textarea>
        <div>
            <label 
            
            class="bg-gray-200 hover:bg-gray-700
            text-gray-700 hover:text-gray-200
            transition duration-300 cursor-pointer
            p-5 rounded-lg font-bold uppercase
            
            "
            
            >
             <span>Select image to upload</span>
             <input type="file" name="image" class="hidden">
            </label>
        </div>
        



    <button
         type="submit"
         class="bg-green-700 hover:bg-green-200 
         text-gray-200 hover:text-green-700
         transition duration-300 cursor-pointer
            p-5 rounded-lg font-bold uppercase">Submit the post</button>
    
    </form>
</div>
@endsection