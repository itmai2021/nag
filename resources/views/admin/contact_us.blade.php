@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="row mb-4">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Message</h3>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <section class="section">
                    <div class="card-body">
                        <table class="table table-striped w-100" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $key => $val)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$val->name}}</td>
                                    <td class="text-center">{{$val->email}}</td>
                                    <td class="text-center">{{$val->message}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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