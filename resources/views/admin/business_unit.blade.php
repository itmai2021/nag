@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="row mb-4">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Business Unit</h3>
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

                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Company Name</th>
                                    <th>Branch Name</th>
                                    <th>Address</th>
                                    <th>Location Point</th>
                                    <th>Active</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['business_units'] as $index => $bussines_unit)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $bussines_unit->company->company_name }}</td>
                                    <td>{{ $bussines_unit->branch_name }}</td>
                                    <td>{{ $bussines_unit->address }}</td>
                                    <td>{{ $bussines_unit->location_point }}</td>
                                    <td class="text-center">
                                        {{ $bussines_unit->is_active ? 'Yes' : 'No' }}
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data{{$bussines_unit->id}}">Edit</button>
                                        <!-- <form action="{{ route('business_unit.delete', $bussines_unit->id) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger show_confirm" data-toggle="tooltip"
                                                title='Delete'>Delete</button>
                                        </form> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="modal fade text-left" id="add-data" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Business Unit Form</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('business_unit.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                            <!-- Select Company -->
                                            <div class="mb-3">
                                                <label for="company_id" class="form-label">Company</label>
                                                <select name="company_id" id="company_id" class="form-select select2" required>

                                                    <option value="" disabled selected>-- Select Company --</option>
                                                    @foreach($data['companys'] as $company)
                                                    <option value="{{ $company->id }}">{{ $company->company_shortname }} - {{ $company->company_name ?? '' }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Branch Name -->
                                            <div class="mb-3">
                                                <label for="branch_name" class="form-label">Branch Name</label>
                                                <input type="text" name="branch_name" class="form-control" id="branch_name" maxlength="100" required>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                                            </div>

                                            <!-- Location Point (Map) -->
                                            <div class="mb-3">
                                                <label for="location_point" class="form-label">Location Point</label>
                                                <!-- <div id="map" style="height: 300px;"></div> -->
                                                <input type="text" name="location_point" id="location_point" class="form-control mt-2" required>
                                            </div>

                                            <!-- Active -->
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
                        @foreach($data['business_units'] as $bussines_unit)
                        <div class="modal fade text-left" id="edit-data{{$bussines_unit->id}}" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Business Unit Form</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('business_unit.update', $bussines_unit->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                            <!-- Select Company -->
                                            <div class="mb-3">
                                                <label for="company_id" class="form-label">Company</label>
                                                <select name="company_id" id="company_id" class="form-select select2" required>
                                                    <option value="" disabled>-- Select Company --</option>
                                                    @foreach($data['companys'] as $company)
                                                    <option value="{{ $company->id }}" {{ $bussines_unit->company_id == $company->id ? 'selected' : '' }}>
                                                        {{ $company->company_shortname }} - {{ $company->company_name ?? '' }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Branch Name -->
                                            <div class="mb-3">
                                                <label for="branch_name" class="form-label">Branch Name</label>
                                                <input type="text" name="branch_name" class="form-control" id="branch_name"
                                                    value="{{ $bussines_unit->branch_name }}" maxlength="100" required>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea name="address" class="form-control" id="address" rows="3" required>{{ $bussines_unit->address }}</textarea>
                                            </div>

                                            <!-- Location Point -->
                                            <div class="mb-3">
                                                <label for="location_point" class="form-label">Location Point</label>
                                                <!-- <div id="map" style="height: 300px;"></div> -->
                                                <input type="text" name="location_point" id="location_point" class="form-control mt-2"
                                                    value="{{ $bussines_unit->location_point }}" required>
                                            </div>

                                            <!-- Active -->
                                            <div class="mb-3">
                                                <label for="is_active" class="form-label">Active</label>
                                                <select name="is_active" class="form-select" id="is_active" required>
                                                    <option value="1" {{ $bussines_unit->is_active == 1 ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ $bussines_unit->is_active == 0 ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
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
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        $('.select2').select2({
            placeholder: "-- Select Company --",
            allowClear: true,
            dropdownParent: $('#yourModalId') // ganti jika modal ID kamu beda
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map('map').setView([-6.200000, 106.816666], 11); // Default Jakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var marker;

        // Klik pada map → set marker & isi koordinat
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);
            var latlng = lat + ',' + lng;

            document.getElementById('location_point').value = latlng;

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });

        // Fitur pencarian lokasi (geocoder)
        L.Control.geocoder({
                defaultMarkGeocode: false
            })
            .on('markgeocode', function(e) {
                var latlng = e.geocode.center;
                var lat = latlng.lat.toFixed(6);
                var lng = latlng.lng.toFixed(6);

                document.getElementById('location_point').value = lat + ',' + lng;

                map.setView(latlng, 15);
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng).addTo(map);
                }
            })
            .addTo(map);
    });


    $(document).ready(function() {
        new DataTable("#table1");

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