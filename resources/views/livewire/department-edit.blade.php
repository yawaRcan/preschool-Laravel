<div>
   
    <form style="margin-left: 250px; margin-top:50px;">
        <div class="row">
            <div class="col-12">
                <h5 class="form-title"><span>Department Details</span></h5>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                    <label>Department ID <span class="login-danger">*</span></label>
                    <input type="text" class="form-control" value="PRE1534" />
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                    <label>Department Name <span class="login-danger">*</span></label>
                    <input type="text" class="form-control" value="MCA" wire:model="departmentName" />
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                    <label>Head of Department <span class="login-danger">*</span></label>
                    <input type="text" class="form-control" value="Lois A" wire:model="hod" />
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms calendar-icon">
                    <label>Department Start Date <span class="login-danger">*</span></label>
                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" wire:model="startDate" />
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                    <label>No of Students <span class="login-danger">*</span></label>
                    <input type="text" class="form-control" value="200" wire:model="nostu" />
                </div>
            </div>
            <div class="col-12">
                <div class="student-submit">
                    <button type="button" class="btn btn-primary" wire:click="updateRec()">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
