@extends('layouts.admin')
@section('title', 'Products List')
@section('content')
<div class="px-3">
    <div class="card card-primary card-outline">
        <form action="{{ route('admin.products.index') }}" id="product_filter">
            <div class="card-header row m-0">
                <div class="col-md-10">
                    Products List
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control" id="date_filter" name="date" value="{{ request()->get('date') }}">
                </div>
            </div>
        </form>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Author</th>
                            <th>Created On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->author->name }}</td>
                            <td>{{ $product->created_at->format('Y-m-d') ?? '' }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</div>
@section('scripts')
@parent
<script>
    $(function () {
        $('.datatable:not(.ajaxTable)').DataTable();

        $("#date_filter").change(function() {
            $('#product_filter').submit();
        });
    })
</script>
@endsection