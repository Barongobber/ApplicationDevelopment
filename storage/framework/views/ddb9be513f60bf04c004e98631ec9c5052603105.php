


<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?php echo e(url('images/zazal.jpg')); ?>" width="160" height="160">
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button" style="background: rgb(230,32,43);border-color: rgb(230,32,43);">Change Photo</button></div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row mb-3 d-none">
                <div class="col">
                    <div class="card text-white bg-primary shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">User Details</p>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('updateProfile')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="fullName"><strong>Full Name</strong></label><input class="form-control" type="text" id="fullName" placeholder="<?php echo e(Auth::user()->name); ?>" name="fullName" disabled></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="matric"><strong>Matric</strong></label><input class="form-control" type="text" id="matric" placeholder="<?php echo e(Auth::user()->matrix_card); ?>" name="matric" disabled></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" value="<?php echo e(Auth::user()->address); ?>" name="address"></div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" value="<?php echo e(Auth::user()->email); ?>" name="email"></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: rgb(230,32,43);border-color: rgb(230,32,43);">Save Settings</button></div>
                                <input type="text" name="route" id="route" value="profile" hidden>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Management Details</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="management_year"><strong>Management Year</strong></label><input class="form-control" type="text" id="management_year" placeholder="<?php echo e($user_desc['management_desc']->management_year); ?>" name="management_year" disabled></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="management_role"><strong>Management Role</strong></label><input class="form-control" type="text" id="management_role" placeholder="<?php echo e($user_desc['role_desc']->role_desc); ?>" name="management_role" disabled></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="division_name"><strong>Division Name</strong></label><input class="form-control" type="text" id="division_name" placeholder="<?php echo e($user_desc['management_desc']->division_name); ?>" name="division_name" disabled></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: rgb(230,32,43);border-color: rgb(230,32,43);" hidden>Save&nbsp;Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Forum Settings</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group"><label for="signature"><strong>Signature</strong><br></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                        <div class="form-group">
                            <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: rgb(230,32,43);border-color: rgb(230,32,43);">Save Settings</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\KULIAH OOO\Sem5\AD\Project\ApplicationDevelopment\ApplicationDevelopment\resources\views/profile.blade.php ENDPATH**/ ?>