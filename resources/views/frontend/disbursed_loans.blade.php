@extends('layouts.header')
@section('title')
@parent
JFS | Disbursed Loans
@endsection

@section('content')

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="margin-left: 20px;">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Disbursed Loans</li>
    </ol>
</nav>

<!-- Stylesheets for DataTables -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet"/>

<div style="padding: 1%"> 
    <h1><center>Disbursed Loans</center></h1> 
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Disbursed Loans List</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive" id="user_table">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Loan ID</th>
                            <th>Amount</th>
                            <th>Tenure</th>
                            <th>User Name</th>
                            <th>Loan Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['loans'] as $loan)
                        <tr>
                            <td>{{ $loan->loan_reference_id }}</td>
                            <td>{{ $loan->amount }}</td>
                            <td>{{ $loan->tenure }}</td>
                            <td>{{ $loan->user_name }}</td>
                            <td>{{ $loan->category_name }}</td> <!-- Correct column for loan category -->
                            <td>
                                <a class="btn btn-primary btn-xs view" title="View" href="{{ route('loan.view', ['id' => $loan->loan_id]) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-primary btn-xs edit" title="Edit" href="{{ route('editLoan', ['id' => $loan->loan_id]) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-xs delete" title="Delete" onclick="deleteLoan('{{ $loan->loan_id }}')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Loan ID</th>
                            <th>Amount</th>
                            <th>Tenure</th>
                            <th>User Name</th>
                            <th>Loan Category</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                <div class="float-right"> 
                    {{ $data['loans']->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@parent

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});

function deleteLoan(id) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this loan!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "{{ route('deleteLoan') }}",
                type: 'post',
                dataType: 'json',
                data: {
                    'loan_id': id,
                    '_token': '{{ csrf_token() }}',
                },
                success: function (response) {
                    if (response.status == 0) {
                        swal("Deleted!", response.msg, "success").then(function() {
                            location.reload();
                        });
                    } else {
                        swal("Error!", response.msg, "error");
                    }
                }
            });
        }
    });
}
</script>

@endsection