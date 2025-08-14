@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="row mb-4">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Company</h3>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header"><span class="fw-bold">List</span>
                    <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#add-data">
                        Add Data
                    </button>
                </div>
                <section class="section">
                    <div class="card-body">
                        <table class="table table-striped w-100" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">Company Short Name</th>
                                    <th class="text-center">Company Number</th>
                                    <th class="text-center">Pilar</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['companies'] as $key => $company)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$company->company_name}}</td>
                                    <td class="text-center">{{$company->company_shortname}}</td>
                                    <td class="text-center">{{$company->company_number}}</td>
                                    <td class="text-center">{{$company->pilar}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data{{$company->id}}">Edit</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="modal fade text-left" id="add-data" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Company Form</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body overflow-auto" style="max-height: 60vh;">
                                            <div class="mb-3">
                                                <label>Company Number:</label>
                                                <input type="text" class="form-control" name="company_number" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Company Name:</label>
                                                <input type="text" class="form-control" name="company_name" required>
                                            </div>

                                            <div class="mb-3">
                                                <label>Company Short Name:</label>
                                                <input type="text" class="form-control" name="company_shortname" required>
                                            </div>

                                            <div class="mb-3">
                                                <label>Pilar:</label>
                                                <input type="text" class="form-control" name="pilar">
                                            </div>

                                            <div class="mb-3">
                                                <label>Website URL:</label>
                                                <input type="url" class="form-control" name="web_url">
                                            </div>

                                            <div class="mb-3">
                                                <label>Description:</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label>Logo:</label>
                                                <input type="file" class="form-control" name="logo" accept="image/*">
                                            </div>

                                            <div class="mb-3">
                                                <label>Building Photo:</label>
                                                <input type="file" class="form-control" name="building_photo" accept="image/*">
                                            </div>

                                            <div class="mb-3">
                                                <label for="is_active" class="form-label">Active</label>
                                                <select name="is_active" class="form-select" id="is_active" required>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach($data['companies'] as $company)
                        <div class="modal fade text-left" id="edit-data{{$company->id}}" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Company Form</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body overflow-auto" style="max-height: 60vh;">
                                            <label>Company Number:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company_number"
                                                    value="{{ old('company_number', $company->company_number) }}" placeholder="Company Number">
                                            </div>
                                            <label>Company Name:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company_name"
                                                    value="{{ old('company_name', $company->company_name) }}" placeholder="Company Name">
                                            </div>

                                            <label>Company Short Name:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company_shortname"
                                                    value="{{ old('company_shortname', $company->company_shortname) }}" placeholder="Short Name">
                                            </div>

                                            <label>Pilar:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="pilar"
                                                    value="{{ old('pilar', $company->pilar) }}" placeholder="Pilar">
                                            </div>

                                            <label>Website URL:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="web_url"
                                                    value="{{ old('web_url', $company->web_url) }}" placeholder="https://example.com">
                                            </div>

                                            <label>Description:</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" rows="3" placeholder="Description">{{ old('description', $company->description) }}</textarea>
                                            </div>

                                            <label>Is Active:</label>
                                            <div class="form-group">
                                                <select name="is_active" class="form-control">
                                                    <option value="1" {{ old('is_active', $company->is_active) == 1 ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ old('is_active', $company->is_active) == 0 ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>

                                            <label>Logo (Upload Baru jika ingin ganti):</label>
                                            <div class="form-group">
                                                <input type="file" name="logo" class="form-control">
                                                @if($company->logo)
                                                <small class="d-block mt-1">Current: <img style="width:25%" src="{{ asset('assets/file/logo/'.$company->logo) }}"></small>
                                                @endif
                                            </div>

                                            <label>Building Photo (Upload Baru jika ingin ganti):</label>
                                            <div class="form-group">
                                                <input type="file" name="building_photo" class="form-control">
                                                @if($company->building_photo)
                                                <small class="d-block mt-1">
                                                    Current:
                                                    <img style="width:25%" src="{{ asset('assets/file/buildings/' . $company->building_photo) }}">
                                                </small>

                                                @endif
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
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
    $('#table1').DataTable({
        responsive: true,
        scrollX: true,
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50],
        stripeClasses: ['table-striped-row', ''] // custom
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