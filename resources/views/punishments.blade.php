@extends('template.main')

@section('css')
    @if(config('settings.center-html-tables'))
        <style>
            table {
                text-align: center;
            }

            table tr td figure {
                justify-content: center;
            }
        </style>
    @endif
@endsection

@section('title')
    @lang('messages.' . $type . 's.title')
@endsection

@section('content')
    <meta name="page-type" content="{{ $type }}"/>

    <div class="d-flex justify-content-between">
        <h3>@lang('messages.' . $type . 's.header')</h3>

        <ul class="pagination">
            <!-- Page numbers should come here -->
        </ul>
    </div>

    <table id="{{ $type }}list" class="table table-striped table-bordered table-hover">
        <thead class="thead-modern">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Reason</th>
            <th scope="col">By</th>
            <th scope="col">Date
            @if($type !== 'kick' && $type !== 'warn')
                <th scope="col">Status</th>
                <th scope="col">Expires At</th>
            @endif
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="{{ asset('js/punishments.js') }}"></script>
@endsection
