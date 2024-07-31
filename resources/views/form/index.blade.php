<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <style>
        .export-button-container {
            float: right;
            margin-right: 56px;
            /* Adjust as needed */
        }
    </style>

    <div class="container mx-auto px-4 lg:w-4/5 xl:w-3/4">
        <a href="{{ route('form.create') }}" class="btn btn-primary btn-sm object-right">Add</a>
        {{-- <a href="{{ route('customer.import') }}" class="btn btn-primary btn-sm object-right">Import</a>
        <a href="{{ route('customer.export') }}" class="btn btn-primary btn-sm object-right">Export</a> --}}
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="card-title">Orders</h5>
            </div>
            <div class="table-responsive flex flex-col">
                <table id="table">
                    <thead style="text-align: center">

                        <tr>
                            <th>ID</th>
                            <th>surname</th>
                            <th>firstName</th>
                            <th>fatherName</th>
                            <th>DOB</th>
                            <th>bloodGroup</th>
                            <th>village</th>
                            <th>address</th>
                            <th>mobileNumber</th>
                            <th>whatsappNumber</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>admissionYear</th>
                            <th>leaveYear</th>
                            <th>lastDtandard</th>
                            <th>educationStatus</th>
                            <th>qualificationCategory</th>
                            <th>lastQualification</th>
                            <th>workStatus</th>
                            <th>businessName</th>
                            <th>establishedYear</th>
                            <th>businessCategory</th>
                            <th>totalStaff</th>
                            <th>businessCountry</th>
                            <th>businessCity</th>
                            <th>jobSector</th>
                            <th>companyName</th>
                            <th>designation</th>
                            <th>jobCountry</th>
                            <th>jobCity</th>
                            <th>currentAddress</th>
                            <th>runningAddress</th>
                            <th>studentsWork(company)</th>
                            <th>resources</th>
                            <th>feedback</th>
                            <th>suggestions</th>
                            <th>attendInnugration?</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center">
                        @foreach ($form as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->surname}}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->father_name}}</td>
                                <td>{{ $item->date_birth}}</td>
                                <td>{{ $item->blood_group}}</td>
                                <td>{{ $item->village}}</td>
                                <td>{{ $item->address}}</td>
                                <td>{{ $item->mobile_number}}</td>
                                <td>{{ $item->whatsapp_number}}</td>
                                <td>{{ $item->email}}</td>
                                <td><img src="{{ $item->user_image}}" alt="" height="100px" width="100px"></td>
                                <td>{{ $item->admission_year}}</td>
                                <td>{{ $item->leave_year}}</td>
                                <td>{{ $item->last_standard}}</td>
                                <td>{{ $item->education_status}}</td>
                                <td>{{ $item->qualification_category}}</td>
                                <td>{{ $item->last_qualification}}</td>
                                <td>{{ $item->work_status}}</td>
                                <td>{{ $item->business_name}}</td>
                                <td>{{ $item->established_year}}</td>
                                <td>{{ $item->business_category}}</td>
                                <td>{{ $item->total_staff}}</td>
                                <td>{{ $item->business_country}}</td>
                                <td>{{ $item->business_city}}</td>
                                <td>{{ $item->job_sector}}</td>
                                <td>{{ $item->company_name}}</td>
                                <td>{{ $item->designation}}</td>
                                <td>{{ $item->job_country}}</td>
                                <td>{{ $item->job_city}}</td>
                                <td>{{ $item->current_address}}</td>
                                <td>{{ $item->current_runningaddress}}</td>
                                <td>{{ $item->students_work_company}}</td>
                                <td>{{ $item->many_resources}}</td>
                                <td>{{$item->feedback_samaj}}</td>
                                <td>{{ $item->suggestions}}</td>
                                <td>{{$item->attend_samaj_innugration}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.71/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.71/vfs_fonts.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script> --}}

    <script>
        $(document).ready(function() { 
        $('#table').DataTable({
            searching: false,
                responsive: true,
                processing: true,
        }); 
      })
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('#table').dataTable({

                searching: false,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{!! route('permission.data') !!}',
                dom: '<"export-button-container"B>lrtip',
                buttons: [{
                    extend: 'collection',
                    text: 'Export',
                    buttons: [{
                            extend: 'excelHtml5',
                            text: 'Export to Excel',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                            }
                        },
                        'copy', 'csv', 'pdf', 'print'
                    ]

                }],
                lengthMenu: [10, 25, 50, "All"],
                columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'Role',
                            name: 'role'
                        },
                        
                        {
                            data: null,
                            render: function(data, type, full, meta) {
                                var editUrl = '{{ route('permission.edit', ':id') }}'.replace(':id', full
                                    .id);
                                var deleteUrl = '{{ route('permission.delete', ':id') }}'.replace(':id',
                                    full.id);

                                return '<div class="d-flex justify-content-center space-x-4">' +
                                    '<a href="' + editUrl +
                                    '" class="btn btn-primary btn-sm">Edit</a> ' +
                                    '<a href="' + deleteUrl +
                                    '" class="btn btn-danger btn-sm ml-4">Delete</a>'; +
                                '</div>';
                            }
                        }
                    ]
                });
            });
    </script> --}}
</body>

</html>
