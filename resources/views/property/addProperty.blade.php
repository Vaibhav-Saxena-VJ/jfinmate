@extends('layouts.header')
@section('title')
    @parent
    JFS | Add Property
@endsection
@section('content')
@parent
<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('partnerDashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Property</li>
    </ol>
</nav>
 
<!-- Begin Page Content -->
<div class="container-fluid">
    <form id="addNewProperty">
        @csrf
        <div class="container-fluid">
            
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Add New Property</h2>
                    <div class="hstack gap-3">
                    <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                    {{-- <button type="submit" class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button> --}}
                    <input type="submit" class="btn btn-primary btn-sm btn-icon-text" value="Save">
                    </div>
                </div>


                <input type="hidden" name="creator_id" value=" {{ Session::get('user_id') }}" />
               

                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- Basic information -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Basic information</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Type Property</label>
                                            <select class="form-control" name="property_type">
                                            <?php
                                                foreach($data['category'] as $v) {  
                                                    ?>
                                                    <option value="<?php echo $v->pid; ?>"><?php echo $v->category_name; ?></option>     
                                                <?php 
                                                }
                                                ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Property Title</label>
                                            <input type="text" name="property_title" class="form-control" placeholder="Property Title" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Builder Name</label>
                                            <input type="text" name="builder_name" class="form-control" placeholder="Builder Name" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select BHK</label>
                                            <select class="form-control" name="select_bhk">
                                                <option>Select BHK</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select> 

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Carpet area</label>
                                            <input type="text" name="area" class="form-control" placeholder="Carpet Area" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Localities</label>
                                            <input type="text" name="localitie" class="form-control" placeholder="Localities" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control" placeholder="City" required />
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- Address -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Property Description</label>
                                    <textarea name="property_description" class="form-control" rows="2" style="resize:none" maxlength="250" placeholder="Property Description" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Property Address</label>
                                    <textarea name="property_address" class="form-control" rows="2" style="resize:none" maxlength="250" placeholder="Property Address" required></textarea>
                                </div>
                            </div>
                        </div>

                       
                        
                        <div class="card mb-4" style="padding:3%">
                            <div class="row">
                            
                                    <div class="col-lg-6">
                                        <label class="form-label">Email ID</label>
                                        <input type="email" class="form-control jixlink2" name="email_id" placeholder="Email ID">
                                        <span class="text-danger error-text jixlink2_err"></span>
                                    </div>
                                
                                
                                    <div class="col-lg-6">
                                        <label class="form-label">Contact Number</label>
                                        <input type="tel" class="form-control jixlink2" name="contact_number" placeholder="Contact Number">
                                        <span class="text-danger error-text jixlink2_err"></span>
                                    </div>
                              
                               
                            </div>
                        </div>

                    </div>
                    <!-- Right side -->
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Property Image</h3>
                                <input class="form-control" type="file" accept=".jpg,.jpeg,.png,.webp " name="property_image" required />

                                <h3 class="h6 mt-2">Property Boucher</h3>
                                <input class="form-control" type="file" accept=".pdf" name="property_voucher" />

                            </div>
                        </div>
                        <!-- Notes -->

                        <div class="card mb-4">
                            <div class="card-body">
                                <label class="form-label">Price Range</label>
                                <select name="price_range" class="form-control">
                                        <?php
                                        foreach($data['range'] as $v) {  
                                            $range_amount = $v->from_price. " to ". $v->to_price;
                                            ?>
                                            <option value="<?php echo $v->range_id; ?>"><?php echo $range_amount; ?></option>     
                                        <?php 
                                        }
                                        ?>
                                </select>    
                                <span class="text-danger error-text jixname2_err"></span>
                            </div>    
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                            <h3 class="h6">Amenities Description</h3>
                            <textarea class="form-control" rows="6" style="resize:none" name="amenities" placeholder="Amenities Description"></textarea>
                            </div>
                        </div>
                       
                      

                    </div>
                </div>
            </div>
        
    </form>
        
   
</div>            

            
@endsection
@section('script')
@parent

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<script>   
$('#addNewProperty').on('submit',function(e){
    e.preventDefault();
    $.ajax({               
        url:"{{Route('insertProperty')}}", 
        method:"POST",                             
        data:new FormData(this) ,
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){
            $(document).find('span.error-text').text('');
        },
        success:function(data){   
            if(data.status == 0){
                
                $.each(data.error,function(prefix,val){
                    $('span.'+prefix+'_error').text(val[0]);
                    swal("Oh noes!", val[0], "error");
                });                      
            }else if(data.status == 2){
                document.getElementById("skill_title_error["+data.id+"]").innerHTML =data.msg;
                // console.log(data); console.log('skill_title_error['+data.id+']');
                // return false;
            }else{
                $('#addNewProperty').get(0).reset();   
                swal({
                    title: data.msg,
                    text: "",
                    type: "success",
                    icon: "success",
                    showConfirmButton: true
                }).then(function(){
                    location.reload();
                });
                    
            }
        }
    });
}); 

function deletePropertie(id)
	{
		$.ajax({
            url:"{{Route('deletePropertie')}}", 
            type: 'post',
            dataType: 'json',
            data: {
                'propertie_id': id,               
                '_token': '{{ csrf_token() }}',
                },
            success: function (response) {
                // console.log(response);
                if(response.status == 0){
                    swal({
                        title: response.error,
                        text: "",
                        type: "success",
                        icon: "success",
                        showConfirmButton: true
                    }).then(function(){ 
                        location.reload();
                    });
                }else{
                    swal({
                        title: response.msg,
                        text: "",
                        type: "success",
                        icon: "success",
                        showConfirmButton: true
                    }).then(function(){ 
                        location.reload();
                    });
                }                           
            }
        });      
	}

</script>


@endsection
