<div>
    <div class="section1" style="margin-left:250px;margin-top:50px">
        <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Add Subject</h3>
            </div>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <form>
                <div class="row">
                <div class="col-12">
                <h5 class="form-title"><span>Subject Information</span></h5>
                </div>
                {{-- <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Subject ID <span class="login-danger">*</span></label>
                <input type="text" class="form-control">
                </div>
                </div> --}}
                <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Subject Name <span class="login-danger">*</span></label>
                <input type="text" class="form-control" placeholder="enter subject" wire:model="subjectName">
                </div>
                </div>
                <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Class / Course <span class="login-danger">*</span></label>
                <select class="form-select" wire:model="courseName">
                    <option value="" selected>__Select Course__</option>
                    @foreach ($courses as $item)
                    <option value="{{$item->course_id}}">{{$item->course_name}}</option>
                        
                    @endforeach
                </select>
                </div>
                </div>
                <div class="col-12">
                <div class="student-submit">
                <button type="button" class="btn btn-primary" wire:click="store();">
                    <span wire:loading.remove wire:target="store">Add Course</span>
                    <span wire:loading wire:target="store" class="spinner-grow spinner-grow-md me-1" role="status" aria-hidden="true" disabled></span>
                    {{-- <span wire:loading wire:target="store">Loading>></span> --}}
                </button>
                </div>
                </div>
                </div>
                </form>
                </div>
                </div>


            {{-- last parent div --}}
    </div>
    <script>
        window.addEventListener('subjectInsert',function(){
            Swal.fire(
'Good job!',
'Subject Inserted!',
'success'
)
        });
     </script>
</div>
