<div style="margin-left:350px;margin-top:50px">
      
    <form>
    <div class="row">
    <div class="col-12">
    <h5 class="form-title student-info">Course Details <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
    </div>
    <div class="col-12 col-md-4">
    <div class="form-group local-forms">
    <label>Enter Course Name <span class="login-danger">*</span></label>
    <input class="form-control {{ $errors->has('courseName') ? 'is-invalid' : (strlen($courseName >0) ? 'is-valid': '')}}" wire:model.lazy="courseName" type="text" placeholder="Enter Course Name">
    </div>
    </div>
    <div class="col-12 col-md-4">
       <div class="form-group local-forms">
       <label>Course Department <span class="login-danger">*</span></label>
       <select wire:model="courseDepartment" class="form-select {{ $errors->has('courseDepartment') ? 'is-invalid': (strlen($courseDepartment>0) ? 'is-valid': '')}}" aria-label="Default select example">
           <option value=""  selected>--Select Department--</option>
           @foreach ($department as $item)
           <option value="{{$item->department_id}}">{{$item->department_name}}</option>
           @endforeach
       </select>
       {{-- <input class="form-control" wire:model.lazy="courseDepartment" type="text" placeholder="Enter Course Department"> --}}
       </div>
       </div>
    <div class="col-12 col-md-4">
    <div class="form-group local-forms">
    <label>Course description <span class="login-danger">*</span></label>
    <input class="form-control {{ $errors->has('courseDescription') ? 'is-invalid': (strlen($courseDescription > 0) ? 'is-valid': '')}}" wire:model.lazy="courseDescription" type="text" placeholder="Enter Course Description">
    </div>
    </div>
  
    
 
    <div class="col-12 col-md-4">
    <div class="form-group students-up-files">
      
   
    <label>Upload Cover Photo (150px X 150px)</label>
    <div class="uplod">
    <label class="file-upload image-upbtn mb-0">
    Choose File <input type="file" accept=".jpg, .png, .jpeg" wire:model.lazy="courseImage"><br>
    </label><br>
    @if ($courseImage!='')
        <img src="{{$courseImage->temporaryUrl()}}" alt="{{$courseImage}}"style="width:300px; height:350px">
                    
        @else
        <img src="{{$oldimage}}" alt="" style="width:300px; height:350px">
      
    @endif
    
    @error('courseImage')
    <span class="text-danger fw-bold">
      {{$message}} 
   </span>
   @enderror
    </div>
    </div>
   
    </div>
    <div class="col-12">
    <div class="student-submit">
    <button type="button"  wire:click="update();"  class="btn btn-primary">
       <span wire:loading.remove wire:target="update">Update</span>
       <span wire:loading wire:target="update" class="spinner-grow spinner-grow-md me-1" role="status" aria-hidden="true" disabled></span>
       <span wire:loading wire:target="update">Loading....</span>
    </button>
    
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <script>
       window.addEventListener('updateCourse',function(){
           Swal.fire(
'Good job!',
'Course Updated!',
'success'
)
       });
    </script>


</div>