<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="mt-8 mx-auto w-full max-w-2xl">
        <div class="text-center text-3xl font-extrabold text-gray-900">
            All Posts
        </div>
        <div class="mt-4">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Created At</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> 
@endsection
@section('javaScript')
<script  src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
<script>
    $('table').DataTable({
    processing: true,
    serverSide: true,
    ajax: '/get-posts'
});
</script>
@endsection