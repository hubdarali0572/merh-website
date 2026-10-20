@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="flex h-[calc(100vh-100px)] bg-white border rounded-lg overflow-hidden shadow-sm">

        <!-- LEFT SIDE: LISTING (33% Width) -->
        <div class="w-1/3 border-r border-gray-200 flex flex-col bg-gray-50">
            <div class="p-4 border-b bg-white flex justify-between items-center sticky top-0 z-10">
                <h4 class="font-bold text-lg text-slate-800 m-0">Inquiries</h4>
                <span class="badge bg-slate-200 text-slate-600 px-2 py-1 rounded text-xs">{{ $studentContacts->count() }}</span>
            </div>

            <div class="overflow-y-auto flex-grow custom-scrollbar">
                @foreach($studentContacts as $contact)
                    @php
                        $isActive = request()->route('id') == $contact->id;
                    @endphp

                    <a href="{{ route('studentContact.index', ['id' => $contact->id]) }}"
                        class="block p-4 border-b transition 
                       {{ $isActive ? 'bg-white border-l-4 border-[#0F1B31] shadow-sm' : 'border-l-4 border-transparent hover:bg-slate-100' }}">

                        <div class="flex justify-between items-start">
                            <span class="font-semibold text-sm {{ $isActive ? 'text-[#0F1B31]' : 'text-gray-500' }}">
                                {{ $contact->name }}
                            </span>

                            <small class="text-gray-400 text-[10px]">
                                {{ $contact->created_at->diffForHumans(null, true) }}
                            </small>
                        </div>

                        <div class="text-xs text-slate-600 truncate mt-1">
                            {{ $contact->company_name }}
                        </div>

                        <div class="mt-2">
                            @if($contact->status == 'seen')
                                <span class="text-[10px] font-bold text-green-600 flex items-center gap-1 uppercase tracking-wider">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span> Seen
                                </span>
                            @else
                                <span class="text-[10px] font-bold text-orange-500 flex items-center gap-1 uppercase tracking-wider">
                                    <span class="h-1.5 w-1.5 rounded-full bg-orange-500 animate-pulse"></span> Pending
                                </span>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- RIGHT SIDE: DETAILS -->
        <div class="w-2/3 flex flex-col bg-white overflow-hidden">
            @if($selectedContact)
                <!-- 1. MODERN TOOLBAR -->
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
                    <div class="flex items-center gap-3">
                        <form action="{{ route('studentContact.destroy', $selectedContact->id) }}" method="POST" class="m-0">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')"
                                class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-red-600 bg-red-50 border border-red-100 rounded-md hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                <i class="fas fa-trash-alt text-xs"></i> Delete Record
                            </button>
                        </form>
                    </div>

                    <div class="flex items-center gap-2 text-slate-400">
                        <i class="far fa-clock text-xs"></i>
                        <span class="text-xs font-medium">Received
                            {{ $selectedContact->created_at->format('M d, Y • h:i A') }}</span>
                    </div>
                </div>

                <!-- 2. SCROLLABLE CONTENT AREA -->
                <div class="flex-grow overflow-y-auto p-8 custom-scrollbar">

                    <!-- Header Section: Profile Info -->
                    <div class="flex items-start justify-between mb-10">
                        <div class="flex items-center gap-5">
                            <div class="h-16 w-16 rounded-2xl bg-[#0F1B31] flex items-center justify-center text-white font-bold text-2xl shadow-lg shadow-slate-200">
                                {{ strtoupper(substr($selectedContact->name, 0, 1)) }}
                            </div>
                            <div>
                                <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mb-1">
                                    {{ $selectedContact->name }}
                                </h2>
                                <div class="flex items-center gap-2 text-slate-500">
                                    <i class="far fa-envelope text-sm"></i>
                                    <span class="text-sm font-medium">{{ $selectedContact->email }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Status Badge -->
                        <div>
                            @if($selectedContact->status == 'seen')
                                <span class="px-3 py-1 rounded-2xl text-[10px] font-bold uppercase tracking-widest bg-green-100 text-green-700 border border-green-200">
                                    Verified Seen
                                </span>
                            @else
                                <span class="px-3 py-1 rounded-2xl text-[10px] font-bold uppercase tracking-widest bg-amber-100 text-amber-700 border border-amber-200">
                                    Waiting for Review
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- 3. METADATA GRID -->
                    <div class="grid grid-cols-2 gap-4 mb-10">
                        <div class="p-5 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Organization / Company</span>
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-white rounded-lg border border-slate-200">
                                    <i class="fas fa-building text-slate-400"></i>
                                </div>
                                <p class="font-bold text-slate-800 m-0">{{ $selectedContact->company_name ?? 'Individual Contact' }}</p>
                            </div>
                        </div>

                        <div class="p-5 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Update Workflow Status</span>
                            <form action="{{ route('studentContact.update', $selectedContact->id) }}" method="POST" class="flex gap-2">
                                @csrf @method('PUT')
                                <select class="form-select form-select-sm block w-full rounded-md border-slate-200 text-sm focus:ring-slate-500" name="status">
                                    <option value="seen" {{ $selectedContact->status == 'seen' ? 'selected' : '' }}> Mark as Seen</option>
                                    <option value="pending" {{ $selectedContact->status == 'pending' ? 'selected' : '' }}>Mark as Pending</option>
                                </select>
                                <button type="submit" class="px-4 py-1 text-xs font-bold text-white bg-[#0F1B31] rounded-md hover:opacity-90 transition-opacity">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- 4. MESSAGE BODY -->
                    <div class="relative">
                        <div class="absolute -left-4 top-0 bottom-0 w-1 bg-slate-100 rounded-full"></div>
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Inquiry Message</h4>

                        <div class="bg-white border border-slate-100 p-8 rounded-xl shadow-sm text-slate-700 leading-relaxed text-lg italic font-serif">
                            <div class="relative z-10">
                                "{!! nl2br(e($selectedContact->message)) ?? 'The sender did not leave a specific message.' !!}"
                            </div>
                        </div>
                    </div>

                </div>
            @else
                <!-- IMPROVED EMPTY STATE DESIGN -->
                <div class="flex flex-col items-center justify-center h-full bg-slate-50 p-12 text-center">
                    <div class="relative mb-6">
                        <!-- Decorative background circle -->
                        <div class="absolute inset-0 bg-white rounded-full scale-150 blur-2xl opacity-50"></div>
                        
                        <!-- Icon Container -->
                        <div class="relative w-24 h-24 bg-white rounded-3xl shadow-xl shadow-slate-200 border border-slate-100 flex items-center justify-center">
                            <i class="fas fa-envelope-open-text text-4xl text-slate-200"></i>
                            <div class="absolute -top-1 -right-1 w-4 h-4 bg-[#0F1B31] rounded-full border-2 border-white"></div>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-slate-800 mb-2">No Inquiry Selected</h3>
                    <p class="text-slate-500 max-w-sm leading-relaxed mb-6">
                        Select a contact from the left list to view their detailed information and manage their status.
                    </p>
                    
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-slate-200 text-slate-500 rounded-full text-[10px] font-bold uppercase tracking-widest">Select Contact</span>
                        <span class="px-3 py-1 bg-slate-200 text-slate-500 rounded-full text-[10px] font-bold uppercase tracking-widest">Update Status</span>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
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