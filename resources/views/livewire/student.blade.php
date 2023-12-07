<div>
    <form style="margin-left:250px;margin-top:50px">
        <div class="row">
        <div class="col-12">
        <h5 class="form-title student-info mt-4">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>First Name <span class="login-danger">*</span></label>
        <input class="form-control {{ $errors->has('studentFrm.firstname') ? 'is-invalid' : (strlen($studentFrm['firstname']>0) ? 'is-valid' :'')}}" type="text" placeholder="Enter First Name" wire:model='studentFrm.firstname'>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Last Name <span class="login-danger">*</span></label>
        <input class="form-control {{$errors->has('studentFrm.lastname') ? 'is-invalid': (strlen($studentFrm['lastname']>0)?'is-valid':'')}} " type="text" placeholder="Enter First Name" wire:model='studentFrm.lastname'>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Gender <span class="login-danger">*</span></label>
        <select class="form-select {{$errors->has('studentFrm.gender') ? 'is-invalid' :(strlen($studentFrm['gender']>0)?'is-valid':'')}}" wire:model='studentFrm.gender'>
        <option>Select Gender</option>
        <option value="female">Female</option>
        <option value="male">Male</option>
        <option value="other">Others</option>
        </select>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms ">
        <label>Date Of Birth <span class="login-danger">*</span></label>
        <input class="form-control {{$errors->has('studentFrm.dateofbirth') ? 'is-invalid': (strlen($studentFrm['dateofbirth']>0)?'is-valid':'')}}"  type="date" placeholder="DD-MM-YYYY" wire:model='studentFrm.dateofbirth'>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Roll Number{{$studentFrm['rollnum']}}</label>
        <input class="form-control {{$errors->has('studentFrm.rollnum')?'is-invalid':(strlen($studentFrm['rollnum']>0)?'is-valid':'')}}" type="text" placeholder="Enter Roll Number" wire:model="studentFrm.rollnum">
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Blood Group <span class="login-danger">*</span></label>
        <select class="form-select {{$errors->has('studentFrm.bloodgroup')?'is-invalid':(strlen($studentFrm['bloodgroup']>0)?'is-valid':'')}}" wire:model='studentFrm.bloodgroup'>
        <option>Please Select Group </option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Religion <span class="login-danger">*</span></label>
        <select class="form-select {{$errors->has('studentFrm.religion')?'is-invalid':(strlen($studentFrm['religion']>0)?'is-valid':'')}}" wire:model='studentFrm.religion'>
        <option>Please Select Religion </option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Christian"> Christian</option>
        <option value="JEW"> JEW</option>
        <option value="Others">Others</option>
        </select>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>E-Mail <span class="login-danger">*</span></label>
            <input class="form-control {{$errors->has('studentFrm.email')?'is-invalid':(strlen($studentFrm['email']>0)?'is-valid':'')}}" type="text" placeholder="Enter Email Address" wire:model='email'>
             @error('email') 
            <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Password <span class="login-danger">*</span></label>
            <input class="form-control {{$errors->has('studentFrm.password')?'is-invalid':(strlen($studentFrm['password']>0)?'is-valid':'')}}" type="password" placeholder="Enter Email Address" wire:model='studentFrm.password'>
            @error('studentFrm.password')
            <span class="text text-danger">{{ $message}}</span>
            @enderror    
        </div>
          
            </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Department <span class="login-danger">*</span></label>
            <select class="form-select {{$errors->has('studentFrm.department')?'is-invalid':(strlen($studentFrm['department']>0)?'is-valid':'')}} " wire:model='studentFrm.department'>
            <option selected>Please Select Department </option>
            @foreach ($department as $item)
            <option value="{{$item->department_id}}">{{$item->department_name}}</option>
                
            @endforeach
           
            </select>
            </div>
            </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Class <span class="login-danger">*</span></label>
        <select class="form-select {{$errors->has('studentFrm.class')?'is-invalid':(strlen($studentFrm['class']>0)?'is-valid':'')}}" wire:model='studentFrm.class'>
        <option>Please Select Class </option>
        @foreach ($class as $item)
    
            <option value="{{$item->course_id}}">{{$item->course_name}}</option>
        @endforeach
        </select>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Section <span class="login-danger">*</span></label>
        <select class="form-select {{$errors->has('studentFrm.section')?'is-invalid':(strlen($studentFrm['section']>0)?'is-valid':'')}}" wire:model='studentFrm.section'>
        <option>Please Select Section </option>
      @foreach ($section as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
        </select>
        </div>
        </div>
       
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Phone </label>
        <input class="form-control {{$errors->has('studentFrm.phone_number')?'is-invalid':(strlen($studentFrm['phone_number']>0)?'is-valid':'')}}" type="number" placeholder="Enter Phone Number" wire:model='studentFrm.phone_number'>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group students-up-files">
        <label>Upload Student Photo (150px X 150px)</label>
        <div class="uplod">
            <label class="file-upload image-upbtn mb-0" >
                Choose File
                <input type="file" wire:model='studentFrm.student_image'>
            </label> 
            
            @error('studentFrm.student_image')
                <span class="text-danger fw-bold">
                  {{$message}} 
                </span>
             @enderror
        </div>
        @if ($studentFrm['student_image'])
        Photo Preview:
        <img src="{{ $studentFrm['student_image']->temporaryUrl() }}">
    @endif
        </div>
        </div>
        <div class="col-12">
        <div class="student-submit">
        <button type="button" class="btn btn-primary" wire:loading.removeClass="btn btn-primary" wire:loading.class="btn btn-secondry" wire:click='store();' wire:loading.attr="disabled">
            <span wire:loading.remove>Submit</span>
            <span wire:loading wire:target="store">Loading...</span>
        </button>
        </div>
        </div>
        </div>
        </form>

</div>