@extends('layouts.header')

@section('title')
@parent
MIS
@endsection

@section('content')
@parent

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="margin-left: 20px;">
        <li class="breadcrumb-item"><a href="{{ route('agentDashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">MIS</li>
    </ol>
</nav>

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet"/>

<div style="padding: 1%">
    <h1><center>MIS</center></h1>
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @if(session()->get('role_id') == 2)
                    Contacts
                @else
                    All Loans
                @endif
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Loan ID</th>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Contact</th>
                            <th>Loan Amount</th>                            
                            <th>Address</th>
                            @if(session()->get('role_id') == 2)
                                <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data['loans'] as $loan)                            <tr>
                                <td>{{ $loan->loan_reference_id }}</td>
                                <td>{{ $loan->user_name }}</td>
                                <td>{{ $loan->email }}</td>
                                <td>{{ $loan->mobile_no }}</td>
                                <td>{{ $loan->amount }}</td>                                
                                <td>{{ $loan->city }}</td>
                                @if(session()->get('role_id') == 2)
                                    <td>
                                    <a class="btn btn-primary btn-xs view" title="View" href="{{ route('agent.mis.view', ['id' => $loan->loan_id]) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Loan ID</th>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Contact</th>
                            <th>Loan Amount</th>                            
                            <th>Address</th>
                            @if(session()->get('role_id') == 2)
                                <th>Action</th>
                            @endif
                        </tr>
                    </tfoot>
                </table>
                <div class="d-flex justify-content-center mt-3"> 
                    {{ $data['loans']->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@parent
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();

        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @elseif(session('error'))
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    });

    // Define deleteLoan function
    function deleteLoan(loanId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('deleteLoan') }}",
                    method: "POST",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'loan_id': loanId,
                    },
                    success: function (response) {
                        Swal.fire(
                            'Deleted!',
                            'Your loan has been deleted.',
                            'success'
                        ).then(function () {
                            location.reload();
                        });
                    },
                    error: function (response) {
                        Swal.fire(
                            'Error!',
                            'There was an issue deleting the loan.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>
@endsection
