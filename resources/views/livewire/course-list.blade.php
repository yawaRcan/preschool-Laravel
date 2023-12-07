<div>
   
    <div class="page-header " style=" margin-left:270px">
        <div class="row align-items-center">
        <div class="col mt-4">
        <h3 class="page-title">MCA INSTITUTE</h3>
      
        </div>
        </div>
        </div>
        
        <div class="student-group-form" style="margin-left:268px; margin-top:50px">
        <div class="row">
        {{-- <div class="col-lg-3 col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by ID ...">
        </div>
        </div> --}}
        <div class="col-lg-3 col-md-6">
        <div class="form-group">
          <input type="search" class="form-control form-control-sm" placeholder="Search" wire:model="searchByCourse">
        </div>
        </div>
      
        <div class="col-lg-4 col-md-6">
        <div class="form-group">
       <select class="form-select" wire:model="searchByDep">
        <option value="">--Select Department--</option>
        @foreach ($department as $item)
            <option value="{{$item->department_id}}">{{$item->department_name}}</option>
        @endforeach
       </select>
        </div>
        </div>
        
        </div>
        </div>
        <div class="row"style="margin-left:250px;">
        <div class="col-md-12">
        <div class="card card-table">
        <div class="card-body">
        
        <div class="page-header">
        <div class="row align-items-center">
        <div class="col" style="margin-left:10px">
        <h3 class="page-title">Subjects</h3>
        </div>
        <div class="col-auto text-end float-end ms-auto download-grp">
        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
        <a href="add-subject.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
        </div>
        </div>
        
        <div class="table-responsive">
        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
        <thead class="student-thread">
        <tr>
        <th>
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something">
        </div>
        </th>
        <th>ID</th>
        <th>CourseName</th>
        <th>Department</th>
        <th>Discription</th>
        <th>CoverPhoto</th>
        <th class="text-end">Action</th>
        </tr>
        </thead>
        <tbody>
       @foreach ($courseList as $item)
       <tr>
        <td>
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something">
        </div>
        </td>
        <td>{{ $loop->iteration}}</td>
        <td>
        <h2>
        <a>{{$item->course_name}}</a>
        </h2>
        </td>
        <td>{{$item->departName}}</td>
        <td> {{subStr($item->course_description, 0, 50)}} </td>
        <td ><img src="{{$item->course_image}}"class="avatar-xl rounded"></td>
        <td class="text-end">
        <div class="actions">
            
        <a href="javascript:;" class="btn btn-sm bg-danger me-2" onclick="deleteRec({{$item->course_id}})">
        <i class="feather-eye text-white"></i>
        </a>
        <a href="{{ route('course_edit',['id'=>$item->course_id])}}" class="btn btn-sm bg-warning">
        <i class="feather-edit text-white"></i>
        </a>
        </div>
        
        </td>
    </tr>
       @endforeach
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
   <script>
    function deleteRec(course_id){
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
                    @this.deleteRec(course_id);
                }
            });
    }
   </script>
</div>
