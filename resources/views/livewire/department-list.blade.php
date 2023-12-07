<div style="margin-left:240px;margin-top:50px">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="student-group-form">
        <div class="row">
        <div class="col-lg-3 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by ID ...">
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by Name ...">
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by Year ...">
        </div>
        </div>
        <div class="col-lg-2">
        <div class="search-student-btn">
        <button type="btn" class="btn btn-primary">Search</button>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="card card-table">
        <div class="card-body">
        
        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">Departments</h3>
        </div>
        <div class="col-auto text-end float-end ms-auto download-grp">
        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
        <a href="add-department.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
        </div>
        </div>
        
        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
        <thead class="student-thread">
        <tr>
        <th>
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something">
        </div>
        </th>
        <th>ID</th>
        <th>Name</th>
        <th>HOD</th>
        <th>Started Year</th>
        <th>No of Students</th>
        <th class="text-end">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($departmentList as $item)
                
            
        <tr>
        <td>
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something">
        </div>
        </td>
        <td>{{$item->department_id}}</td>
        <td>
        <h2>
        <a>{{$item->department_name}}</a>
        </h2>
        </td>
        <td>{{$item->hod}}</td>
        <td>{{$item->started_year}}</td>
        <td>{{$item->Num_students}}</td>
        <td class="text-end">
        <div class="actions">
        <a href="javascript:;" class="btn btn-sm bg-success-light me-2"onclick="deleteRec({{$item->department_id}});">
        <i class="feather-eye"></i>
        </a>
        <a href="{{ route('department.edit',['id' => $item->department_id ] )}}" class="btn btn-sm bg-danger-light">
        <i class="feather-edit"></i>
        </a>
        </div>
        </td>
        </tr>
        @endforeach
        {{-- ['id'=> $item->department_id] --}}
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
</div>
<script>
    function deleteRec(department_id){
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteRec(department_id);
                    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
                }
            });

    }
</script>
