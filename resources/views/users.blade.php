@extends('template.main')

@section('title')
    @lang('messages.users.title')
@endsection

@section('content')
    <div class="d-flex justify-content-between">
        <h3>@lang('messages.users.header')</h3>

        <ul class="pagination">
            <!-- Page numbers should come here -->
        </ul>
    </div>

    <table id="userslist" class="table table-striped table-bordered table-hover">
        <thead class="thead-modern">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Language</th>
            <th scope="col">First Join</th>
            <th scope="col">Last Seen</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="{{ asset('js/users.js') }}"></script>
@endsection
