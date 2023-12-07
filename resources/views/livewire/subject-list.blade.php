<div>
    
    <div class="sectionSubjects" style="margin-left:260px;margin-top:50px">
        <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Subjects</h3>
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Subjects</li>
            </ul>
            </div>
            </div>
            </div>
            
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
            <input type="text" class="form-control" placeholder="Search by Class ...">
            </div>
            </div>
            <div class="col-lg-2">
            <div class="search-student-btn">
            <button type="btn" class="btn btn-primary">Search</button>
            </div>
            </div>
            </div>
            </div>
            <div class="card card-table">
                <div class="card-body">
                
                <div class="page-header">
                <div class="row align-items-center">
                <div class="col">
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
                <th class="text-center">Name</th>
                <th>Class</th>
                <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $item)
                <tr>
                    <td>
                    <div class="form-check check-tables">
                    <input class="form-check-input" type="checkbox" value="something">
                    </div>
                    </td>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-center"> {{$item->subject_Name}}</td>
                    <td>{{$item->CourseName}}</td>
                    <td>
                   
                    <div class="text-center">
                        <a href="javascript:;" class="btn btn-md bg-warning me-2 text-white" onclick="deleteSub({{$item->subject_id}})">
                            <i class="feather-eye"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-md bg-info text-white" wire:click="edit({{$item->subject_id}})">
                            <i class="feather-edit"></i>
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
{{-- ++++++++model for edit subject++++++++++ --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upadate Subject</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Subject Name</label>
                <input type="text" class="form-control" wire:model="subjectName">
            </div>
            <div class="form-group">
                <label for="">CLass/COurse</label>
                <select name="" id="" class="form-select" wire:model="course">
                    <option value="">--Select Course--</option>
                    @foreach ($courses as $item)
                        <option value="{{$item->course_id}}">{{$item->course_name}}</option>
                    @endforeach
                    
                </select>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="update()">update</button>
        </div>
      </div>
    </div>
  </div>
  {{-- page last ending div --}}
    </div>
    <script>
      window.addEventListener('toggle-modal', e => {
          $("#exampleModal").modal('toggle');
       });

        function deleteSub(subject_id){
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
                        @this.deleteSub(subject_id);
                        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
                    }
                });
    
        }
    </script>
</div>

