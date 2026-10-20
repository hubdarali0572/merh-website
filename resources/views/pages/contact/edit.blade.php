@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @include('includes.messages')

     <h4 class="text-2xl font-semibold">Users Request Contacts</h4>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <!-- Name -->
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted"><strong>Name</strong></h6>
                            <p class="fw-semibold">{{ $studentContact->name }}</p>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted"><strong>Email</strong></h6>
                            <p class="fw-semibold">{{ $studentContact->email }}</p>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted"><strong></strong>Company Name</strong></h6>
                            <p class="fw-semibold">{{ $studentContact->company_name ?? 'N/A' }}</p>
                        </div>


                        <!-- Status (Editable) -->
                        <div class="col-md-6 mb-3">
                            <form action="{{ route('studentContact.update', $studentContact->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h6 class="text-muted"><strong>Status</strong></h6>
                                <select class="form-select" name="status">
                                    <option value="seen" {{ $studentContact->status == 'seen' ? 'selected' : '' }}>
                                        Seen</option>
                                    <option value="pending" {{ $studentContact->status == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                </select>
                                <div class="mt-3 d-flex gap-2">
                                     <button type="submit"  class="btn bg-slate-200 text-[#0F1B31] hover:bg-slate-200  font-semibold">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- Notes -->
                        <div class="col-md-12 mb-3">
                            <h6 class="text-muted"><strong>Notes</strong></h6>
                            <div class="p-3 bg-light border rounded">
                                {!! nl2br(e($studentContact->message)) ?? 'No Notes Available' !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/select2.js') }}"></script>
@endpush