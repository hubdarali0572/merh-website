@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @include('includes.messages')

    <div class="flex justify-between items-center mb-2">
        <h4 class="text-2xl font-semibold">Listing Of Blogs</h4>
        @can('create blog')
            <a href="{{ route('smartai-blog.create') }}" class="btn bg-slate-200 text-[#0F1B31] hover:bg-slate-200  font-semibold">
               Add New
            </a>
        @endcan
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Meta Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($blogs as $blog)
                                    <tr class="py-1">
                                        <td class="py-2">{{ $blog->title }}</td>
                                        <td class="py-2">{{ $blog->meta_title }}</td>
                                        <td class="py-2">{{ $blog->category }}</td>
                                        <td class="py-2">{{ $blog->status }}</td>
                                        <td class="py-1">
                                            <div class="d-flex justify-content-center align-items-center gap-1">
                                                <a href="{{ route('smartai-blog.edit', $blog->id) }}"
                                                    class="btn bg-slate-200 text-dark hover:bg-slate-200 font-semibold  text-md px-2 py-2"
                                                    title="Edit">
                                                    <i class="fas fa-edit text-md text-[#0F1B31]"></i>
                                                </a>
                                                <form id="delete-form-{{ $blog->id }}" action="{{ route('smartai-blog.destroy', $blog->id) }}" method="POST"
                                                    class="d-inline m-0 p-0">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" onclick="confirmDelete({{ $blog->id }})"
                                                        class="btn bg-slate-200 text-dark hover:bg-slate-200 font-semibold text-md px-2 py-2"
                                                        title="Delete">
                                                        <i class="fas fa-trash text-md text-[#ef4444]"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>

@endpush

@push('plugin-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

@endpush