@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="row mb-4">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>News</h3>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold">List</span>
                    <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#add-data">
                        Add Data
                    </button>
                </div>

                <section class="section">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Company</th>
                                    <th>Subject</th>
                                    <th>Publication Date</th>
                                    <th>Active</th>
                                    <th>Highlight</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['news'] as $key => $nw)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $nw->company->company_name ?? '-' }}</td>
                                    <td>{{ $nw->subject }}</td>
                                    <td>{{ $nw->publication_date }}</td>
                                    <td>{{ $nw->is_active ? 'Yes' : 'No' }}</td>
                                    <td>{{ $nw->is_highlight ? 'Yes' : 'No' }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-data{{ $nw->id }}">Edit</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Modal Add Data --}}
                        <div class="modal fade text-left" id="add-data" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">News Form</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('news.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body overflow-auto" style="max-height: 60vh;">

                                            {{-- Company --}}
                                            <div class="mb-3">
                                                <label>Company</label>
                                                <select name="company_id" class="form-control" required>
                                                    <option value="">-- Select Company --</option>
                                                    @foreach ($data['companys'] as $company)
                                                    <option value="{{ $company->id }}">
                                                        {{ $company->company_shortname }} -
                                                        {{ $company->company_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Subject --}}
                                            <div class="mb-3">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" name="subject" required>
                                            </div>

                                            {{-- Description --}}
                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea class="form-control editor" name="description" rows="4" required></textarea>
                                            </div>

                                            {{-- Image --}}
                                            <div class="mb-3">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="image"
                                                    accept="image/*">
                                            </div>

                                            {{-- Publication Date --}}
                                            <div class="mb-3">
                                                <label>Publication Date</label>
                                                <input type="date" class="form-control" name="publication_date"
                                                    required>
                                            </div>

                                            {{-- Active --}}
                                            <div class="mb-3">
                                                <label>Active</label>
                                                <select name="is_active" class="form-control" required>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            {{-- Highlight --}}
                                            <div class="mb-3">
                                                <label>Highlight</label>
                                                <select name="is_highlight" class="form-control" required>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- Modal Edit Data --}}
                        @foreach ($data['news'] as $nw)
                        <div class="modal fade text-left" id="edit-data{{ $nw->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit News</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('news.update', $nw->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body overflow-auto" style="max-height: 60vh;">

                                            {{-- Company --}}
                                            <div class="mb-3">
                                                <label>Company</label>
                                                <select name="company_id" class="form-control" required>
                                                    @foreach ($data['companys'] as $company)
                                                    <option value="{{ $company->id }}"
                                                        {{ $company->id == $nw->company_id ? 'selected' : '' }}>
                                                        {{ $company->company_shortname }} -
                                                        {{ $company->company_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Subject --}}
                                            <div class="mb-3">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" name="subject"
                                                    value="{{ $nw->subject }}" required>
                                            </div>

                                            {{-- Description --}}
                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea class="form-control editor" name="description" rows="4" required>{{ $nw->description }}</textarea>
                                            </div>

                                            {{-- Image --}}
                                            <div class="mb-3">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="image"
                                                    accept="image/*">
                                                @if ($nw->image)
                                                <small class="d-block mt-1">Current: <img
                                                        src="{{ asset('assets/file/news/' . $nw->image) }}"
                                                        width="80"></small>
                                                @endif
                                            </div>

                                            {{-- Publication Date --}}
                                            <div class="mb-3">
                                                <label>Publication Date</label>
                                                <input type="date" class="form-control"
                                                    name="publication_date" value="{{ $nw->publication_date }}"
                                                    required>
                                            </div>

                                            {{-- Active --}}
                                            <div class="mb-3">
                                                <label>Active</label>
                                                <select name="is_active" class="form-control" required>
                                                    <option value="0"
                                                        {{ !$nw->is_active ? 'selected' : '' }}>No</option>
                                                    <option value="1" {{ $nw->is_active ? 'selected' : '' }}>
                                                        Yes</option>
                                                </select>
                                            </div>

                                            {{-- Highlight --}}
                                            <div class="mb-3">
                                                <label>Highlight</label>
                                                <select name="is_highlight" class="form-control" required>
                                                    <option value="0"
                                                        {{ !$nw->is_highlight ? 'selected' : '' }}>No</option>
                                                    <option value="1"
                                                        {{ $nw->is_highlight ? 'selected' : '' }}>Yes</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary ml-1" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection

@section('addon-script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table1').DataTable({
            responsive: true, // mode responsif
            scrollX: true, // bisa scroll horizontal
            pageLength: 10, // opsional: jumlah baris default
            lengthMenu: [5, 10, 25, 50]
        });
    });

    $('.show_confirm').click(function(event) {

        var form = $(this).closest("form");

        var name = $(this).data("name");

        event.preventDefault();

        swal({

                title: `Are you sure to delete this data ?`,

                icon: "warning",

                buttons: true,

                dangerMode: true,

            })

            .then((willDelete) => {

                if (willDelete) {

                    form.submit();

                }

            });

    });
</script>
@endsection