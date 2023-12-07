<div style="margin-left:280px;margin-top:50px">
      
    <form>
    <div class="row">
    <div class="col-12">
    <h5 class="form-title student-info">Department <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
    </div>
    <div class="col-12 col-md-4">
    <div class="form-group local-forms">
    <label>Enter Department Name<span class="login-danger">*</span></label>
    <input class="form-control {{ $errors->has('DepartmentName') ? 'is-invalid' : (strlen($DepartmentName > 0) ? 'is-valid' : '')}}" wire:model.lazy="DepartmentName" type="text" placeholder="Enter Department Name">
    </div>
    </div>
{{--           HOD --}}
<div class="col-12 col-md-4">
    <div class="form-group local-forms">
    <label>HOD<span class="login-danger">*</span></label>
    <input class="form-control {{ $errors->has('hod') ? 'is-invalid' : (strlen($hod > 0) ? 'is-valid' : '')}}" wire:model.lazy="hod" type="text" placeholder="Enter Department Name">
    </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group local-forms">
        <label>Started Year<span class="login-danger">*</span></label>
        <input class="form-control {{ $errors->has('startyear') ? 'is-invalid' : (strlen($startyear > 0) ? 'is-valid' : '')}}" wire:model.lazy="startyear" type="date">
        </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group local-forms">
            <label>No of students<span class="login-danger">*</span></label>
            <input class="form-control {{ $errors->has('NuOfstudent') ? 'is-invalid' : (strlen($NuOfstudent > 0) ? 'is-valid' : '')}}" wire:model.lazy="NuOfstudent" type="number">
            </div>
            </div>
    
    <div class="col-12">
    <div class="student-submit">
    <button  class="btn btn-primary" type="button" wire:click="store();" wire:loading.class.remove="btn-primary" wire:loading.class="spinner-grow text-info m-5">
        <span  wire:target="store()" wire:loading.remove> {{$submitBtn}} </span>
        
    </button>
    </div>
    </div>
    </div>
    
    </form>
    </div>
    <script>
        window.addEventListener('confirmStore',function(){
            Swal.fire(
  'Good job!',
  'Deaprtment Inserted!',
  'success'
)
        });
    </script>


</div>